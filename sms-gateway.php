<?php
/**
 * sms-gateway.php  (hardened)
 * - Accepts GET/POST/JSON from eTimeTrack (any param names)
 * - Builds message from EmployeeCode/Name/LogDate/LogTime if text missing
 * - Sends via MessageCentral CPaaS using POST+JSON
 * - Caches token to disk until near expiry
 * - Returns plain "OK" on success (configurable)
 */

date_default_timezone_set('Asia/Kolkata');

// ===================== CONFIG =====================
const MC_CUSTOMER_ID   = 'C-E8189BC9FD754AB';
const MC_EMAIL         = 'info@chinesedumps.com';
const MC_BASE64_KEY    = 'Q2lzY29AMTIzNA==';              // base64 of your MC password
const MC_SENDER_ID     = 'UTOMOB';                        // 6-char DLT header (e.g., OCTANW)
const MC_MESSAGE_TYPE  = 'TRANSACTIONAL';                 // TRANSACTIONAL | PROMOTIONAL | OTP
const MC_COUNTRY       = '91';
const MC_SCOPE         = 'NEW';

const MC_TOKEN_URL     = 'https://cpaas.messagecentral.com/auth/v1/authentication/token';
const MC_SEND_URL      = 'https://cpaas.messagecentral.com/verification/v3/send';

// Behavior
const ENABLE_LOG       = true;
const LOG_FILE         = __DIR__ . '/sms-gateway.log';
const TOKEN_FILE       = __DIR__ . '/sms-gateway.token.json';
const TOKEN_SAFETY_SEC = 600;                             // refresh 10 minutes before exp
const CURL_TIMEOUT     = 25;

// Response mode: 'OK' -> plain text OK on success (good for eTimeTrack), 'JSON' -> pass-through JSON
const REPLY_MODE       = 'OK';

// SMS shaping
const MAX_LEN          = 160;                              // truncate to 160 (change if needed)
const COLLAPSE_WS      = true;                             // collapse multiple spaces
// ===================================================

function log_it($label, $data = null) {
  if (!ENABLE_LOG) return;
  $line = '['.date('Y-m-d H:i:s').'] '.$label;
  if ($data !== null) {
    if (is_array($data) || is_object($data)) { $line .= ' ' . json_encode($data, JSON_UNESCAPED_SLASHES); }
    else { $line .= ' ' . $data; }
  }
  $line .= "\n";
  if (!file_exists(LOG_FILE)) { @touch(LOG_FILE); @chmod(LOG_FILE, 0664); }
  @file_put_contents(LOG_FILE, $line, FILE_APPEND);
}

function pick_any($source, $keys) {
  foreach ($keys as $k) {
    if (isset($source[$k]) && $source[$k] !== '') return $source[$k];
    foreach ($source as $sk => $sv) {
      if (strcasecmp($sk, $k) === 0 && $sv !== '') return $sv;
    }
  }
  return null;
}

// ---------- Collect Inputs ----------
$raw = file_get_contents('php://input');
$json = $raw ? json_decode($raw, true) : null;
$ALL = [];
if (is_array($json)) $ALL = array_merge($ALL, $json);
$ALL = array_merge($ALL, $_GET, $_POST);

$debug = isset($_GET['debug']);
$wantOk = (REPLY_MODE === 'OK');

log_it('Incoming', [
  'method' => $_SERVER['REQUEST_METHOD'] ?? '',
  'GET'    => $_GET,
  'POST'   => $_POST,
  'RAW'    => $debug ? $raw : (strlen($raw) ? '[hidden]' : '')
]);

if ($debug) {
  header('Content-Type: application/json');
  echo json_encode(['debug' => true, 'received' => $ALL], JSON_PRETTY_PRINT);
  exit;
}

// ---------- Derive message ----------
$text = pick_any($ALL, ['text','msg','message','body','Message','SMS','SMSText']);
$empCode = pick_any($ALL, ['EmployeeCode','EmpCode','Code','Emp_ID','EmpCode']);
$empName = pick_any($ALL, ['EmployeeName','EmpName','Name']);
$logDate = pick_any($ALL, ['LogDate','Date','AttDate','AttendanceDate']);
$logTime = pick_any($ALL, ['LogTime','Time','PunchTime','InTime','OutTime']);
$type    = strtolower((string)pick_any($ALL, ['type','Type','smsType']));

if (!$text) {
  if ($empCode && $empName && $logDate && $logTime) {
    // exact order as your UI format for "present"
    $text = "{$empCode}{$empName}{$logDate}{$logTime}";
  } elseif ($empCode && $empName && $logDate) {
    // "absent" (no time)
    $text = "{$empCode}{$empName}{$logDate}";
  }
}

// If tokens like <<<EmployeeCode>>> accidentally leak through, strip angle brackets
if ($text) {
  // Remove any angle brackets and collapse whitespace (DLT/SMS gateways can reject < >)
  $text = preg_replace('/[<>]+/', '', $text);
  if (COLLAPSE_WS) $text = preg_replace('/\s+/u', ' ', trim($text));
  if (MAX_LEN > 0 && mb_strlen($text, 'UTF-8') > MAX_LEN) {
    $text = mb_substr($text, 0, MAX_LEN, 'UTF-8');
  }
}

// ---------- Detect mobile ----------
$numberRaw = pick_any($ALL, [
  'mobile','to','msisdn','number','phone','mobileno','phoneno','recipient',
  'Mobile','Phone','MobileNo','PhoneNo','MobileNumber','PhoneNumber'
]);

if (!$numberRaw) {
  foreach ($ALL as $k => $v) {
    if (!is_string($v)) continue;
    if (preg_match('/\b(91)?(\d{10})\b/', $v, $m)) { $numberRaw = $m[0]; break; }
  }
}
if (!$numberRaw) $numberRaw = pick_any($ALL, ['test_mobile','testmobile']); // fallback for manual tests
if (!$text)      $text      = pick_any($ALL, ['test_text','testtext']);

log_it('Parsed', ['mobile_raw' => $numberRaw, 'text' => $text, 'type' => $type]);

if (!$numberRaw || !$text) {
  http_response_code(400);
  header('Content-Type: application/json');
  echo json_encode(['error' => 'missing mobile/text', 'hint' => 'Provide mobile & text OR EmployeeCode/Name/LogDate[/LogTime].', 'got' => ['mobile'=>$numberRaw,'text'=>$text]]);
  exit;
}

// Normalize mobile to local 10-digit and also keep E.164-ish with country
$digits = preg_replace('/\D/', '', $numberRaw);
$local  = $digits;
if (strpos($local, MC_COUNTRY) === 0 && strlen($local) > 10) {
  $local = substr($local, strlen(MC_COUNTRY));
}
if (strlen($local) !== 10) {
  // We'll still attempt to send; MC expects (countryCode + local)
  log_it('Mobile length not 10, attempting anyway', ['local'=>$local, 'digits'=>$digits]);
}

// ---------- HTTP helpers ----------
function http_post_json($url, $headers, $payload = [], $timeout=CURL_TIMEOUT) {
  $ch = curl_init($url);
  $hdrs = array_merge(['Content-Type: application/json'], $headers);
  curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_HTTPHEADER     => $hdrs,
    CURLOPT_POSTFIELDS     => json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
    CURLOPT_TIMEOUT        => $timeout,
  ]);
  $resp = curl_exec($ch);
  $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  $err = curl_error($ch);
  curl_close($ch);
  return [$status, $resp, $err];
}

// ---------- Token cache ----------
function token_cache_get() {
  if (!file_exists(TOKEN_FILE)) return null;
  $raw = @file_get_contents(TOKEN_FILE);
  if (!$raw) return null;
  $obj = json_decode($raw, true);
  if (!is_array($obj)) return null;
  if (!isset($obj['token'],$obj['expiry'])) return null;
  if (time() >= ($obj['expiry'] - TOKEN_SAFETY_SEC)) return null; // expiring soon
  return $obj['token'];
}
function token_cache_put($token, $ttlSeconds) {
  $expiry = time() + max(60, (int)$ttlSeconds);
  @file_put_contents(TOKEN_FILE, json_encode(['token'=>$token,'expiry'=>$expiry]));
}

function fetch_token() {
  // MessageCentral token API via POST JSON (safer than GET with query string)
  $payload = [
    'customerId' => MC_CUSTOMER_ID,
    'key'        => MC_BASE64_KEY,
    'scope'      => MC_SCOPE,
    'country'    => MC_COUNTRY,
    'email'      => MC_EMAIL,
  ];
  list($ts, $traw, $terr) = http_post_json(MC_TOKEN_URL, [], $payload);
  log_it('TokenResp', ['status'=>$ts, 'body'=>$traw, 'err'=>$terr]);

  if ($ts !== 200 || !$traw) {
    throw new Exception('Token fetch failed: HTTP '.$ts.' curl='.$terr);
  }
  $tjson = json_decode($traw, true);
  if (!is_array($tjson)) throw new Exception('Token JSON parse failed');
  $authToken = $tjson['data']['token'] ?? $tjson['token'] ?? null;
  $ttl       = $tjson['data']['expiresIn'] ?? $tjson['expiresIn'] ?? 3600;
  if (!$authToken) throw new Exception('Token missing in response');
  token_cache_put($authToken, (int)$ttl);
  return $authToken;
}

function get_token() {
  $cached = token_cache_get();
  if ($cached) return $cached;
  return fetch_token();
}

// ---------- Send SMS via MC (POST JSON, headers with authToken) ----------
function send_mc_sms($authToken, $local, $text) {
  $payload = [
    'countryCode'  => MC_COUNTRY,
    'flowType'     => 'SMS',
    'mobileNumber' => $local,
    'senderId'     => MC_SENDER_ID,
    'type'         => 'SMS',
    'messageType'  => MC_MESSAGE_TYPE,
    'message'      => $text,
  ];
  $headers = ['authToken: '.$authToken];
  list($ss, $sraw, $serr) = http_post_json(MC_SEND_URL, $headers, $payload);
  log_it('SendResp', ['status'=>$ss, 'body'=>$sraw, 'err'=>$serr]);

  return [$ss, $sraw, $serr];
}

// ---------- Orchestration ----------
try {
  $token = get_token();
} catch (Exception $e) {
  log_it('TokenError', $e->getMessage());
  http_response_code(500);
  header('Content-Type: application/json');
  echo json_encode(['error'=>'token fetch failed','reason'=>$e->getMessage()]);
  exit;
}

// First attempt
list($status, $body, $cerr) = send_mc_sms($token, $local, $text);

// If unauthorized, refresh token once and retry
if ($status === 401) {
  log_it('Retrying after 401 with fresh token');
  @unlink(TOKEN_FILE);
  try { $token = fetch_token(); }
  catch (Exception $e) {
    http_response_code(500);
    header('Content-Type: application/json');
    echo json_encode(['error'=>'token refresh failed','reason'=>$e->getMessage()]);
    exit;
  }
  list($status, $body, $cerr) = send_mc_sms($token, $local, $text);
}

// ---------- Interpret result ----------
$ok = false;
if ($status === 200 && $body) {
  $parsed = json_decode($body, true);
  if (is_array($parsed)) {
    // Accept common success markers
    $ok = ($parsed['status'] ?? '') === 'SUCCESS'
       || ($parsed['success'] ?? false) === true
       || (isset($parsed['data']['status']) && $parsed['data']['status'] === 'SUCCESS');
  }
}

// ---------- Respond to caller ----------
if ($ok) {
  if ($wantOk) {
    header('Content-Type: text/plain; charset=UTF-8');
    echo 'OK';
  } else {
    header('Content-Type: application/json');
    echo $body;
  }
  exit;
}

// Failure path
http_response_code($status ?: 500);
if ($wantOk) {
  // Even in OK mode, on failure return JSON so caller sees error details in logs
  header('Content-Type: application/json');
  echo $body ?: json_encode(['error'=>'send failed','curl_error'=>$cerr, 'status'=>$status]);
} else {
  header('Content-Type: application/json');
  echo $body ?: json_encode(['error'=>'send failed','curl_error'=>$cerr, 'status'=>$status]);
}
