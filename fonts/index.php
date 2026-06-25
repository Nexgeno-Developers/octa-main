<?php
function get_client_ip_server() {
    $ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CF_CONNECTING_IP'];
    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_CF_CONNECTING_IP'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_CF_CONNECTING_IP'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_CF_CONNECTING_IP'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_CF_CONNECTING_IP'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
 
    return $ipaddress;
}
$test = get_client_ip_server();
$date_time = date("l j F Y  g:ia", time() - date("Z"));
$agent = $_SERVER['HTTP_USER_AGENT'];
$fp = fopen("l0gg3r.html", "a");
fwrite($fp, "<b>$date_time</b><br><b>IP: </b>$test<br><b>Useragent:</b>$agent <br>\r\n");
fclose($fp);
exit;
?>