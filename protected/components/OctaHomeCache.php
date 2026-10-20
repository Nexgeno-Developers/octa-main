<?php

/**
 * File cache for the public homepage.
 * Lighthouse loads the page with an empty cache, so a slow PHP render shows up directly as FCP/LCP.
 * A fresh file is sent before Yii boots. A slightly old file is still sent, then rebuilt in the background.
 */
class OctaHomeCache
{
	const FRESH = 900;
	const STALE = 7200;

	public static function tryServe()
	{
		if (!self::eligible()) {
			return;
		}
		$mobile = OctaDevice::skipDesktopMegaMenu();
		$file = self::file($mobile);
		if (!is_file($file)) {
			return;
		}
		$age = time() - filemtime($file);
		if ($age > self::STALE || self::sourcesNewerThan(filemtime($file))) {
			return;
		}
		$html = @file_get_contents($file);
		if (!is_string($html) || strlen($html) < 20000 || strpos($html, 'id="footer"') === false) {
			return;
		}
		if (!headers_sent()) {
			header('Content-Type: text/html; charset=UTF-8');
			header('Cache-Control: public, max-age=120');
			header('Vary: User-Agent', false);
			header('X-Octa-Cache: hit');
		}
		echo $html;
		if ($age <= self::FRESH) {
			exit;
		}
		if (self::finishAndRebuild()) {
			return;
		}
		self::kickRefresh($mobile);
		exit;
	}

	public static function store($html, $mobile)
	{
		if (!is_string($html) || strlen($html) < 20000 || strpos($html, 'id="footer"') === false) {
			return;
		}
		$file = self::file($mobile);
		$dir = dirname($file);
		if (!is_dir($dir)) {
			@mkdir($dir, 0755, true);
		}
		$tmp = $file . '.tmp';
		if (@file_put_contents($tmp, $html, LOCK_EX) === false) {
			return;
		}
		if (is_file($file)) {
			@unlink($file);
		}
		if (!@rename($tmp, $file)) {
			@unlink($tmp);
		}
	}

	private static function eligible()
	{
		if (PHP_SAPI === 'cli') {
			return false;
		}
		$method = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
		if ($method !== 'GET') {
			return false;
		}
		if (!empty($_GET['octa_warm']) || !empty($_SERVER['QUERY_STRING'])) {
			return false;
		}
		$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
		if ($host === '' || stripos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false) {
			return false;
		}
		$path = isset($_SERVER['REQUEST_URI']) ? parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) : '/';
		$path = rtrim((string) $path, '/');
		return $path === '' || strcasecmp($path, '/index.php') === 0;
	}

	private static function file($mobile)
	{
		return dirname(__DIR__) . DIRECTORY_SEPARATOR . 'runtime' . DIRECTORY_SEPARATOR . 'pagecache' . DIRECTORY_SEPARATOR . 'home-' . ($mobile ? 'm' : 'd') . '.html';
	}

	private static function sourcesNewerThan($mtime)
	{
		$root = dirname(__DIR__, 2);
		$files = array(
			$root . '/protected/modules/main/views/layouts/main.php',
			$root . '/protected/modules/main/views/default/index.php',
			$root . '/protected/components/OctaHomeCache.php',
			$root . '/protected/components/LateAssets.php',
			$root . '/protected/components/OctaSliderImage.php',
			$root . '/css/style.css',
			$root . '/css/critical-mobile.css',
			$root . '/css/stye_mega_menu.css',
			$root . '/css/bootstrap.min.css',
			$root . '/css/demo.css',
			$root . '/css/main_css_mega_mnu.css',
			$root . '/css/phone-home.css',
		);
		foreach ($files as $f) {
			if (is_file($f) && filemtime($f) > $mtime) {
				return true;
			}
		}
		$slider = $root . '/img/slider_images';
		return is_dir($slider) && filemtime($slider) > $mtime;
	}

	private static function finishAndRebuild()
	{
		$finish = null;
		if (function_exists('fastcgi_finish_request')) {
			$finish = 'fastcgi_finish_request';
		} elseif (function_exists('litespeed_finish_request')) {
			$finish = 'litespeed_finish_request';
		}
		if ($finish === null) {
			return false;
		}
		$finish();
		$GLOBALS['octa_rebuild_cache'] = true;
		@ini_set('display_errors', '0');
		return true;
	}

	private static function kickRefresh($mobile)
	{
		$port = isset($_SERVER['SERVER_PORT']) ? (int) $_SERVER['SERVER_PORT'] : 80;
		if ($port < 1 || $port === 443) {
			return;
		}
		$lock = dirname(self::file($mobile)) . DIRECTORY_SEPARATOR . 'refresh-' . ($mobile ? 'm' : 'd') . '.lock';
		if (!is_dir(dirname($lock))) {
			@mkdir(dirname($lock), 0755, true);
		}
		if (is_file($lock) && (time() - filemtime($lock)) < 90) {
			return;
		}
		@touch($lock);
		$fp = @fsockopen('127.0.0.1', $port, $errno, $errstr, 0.3);
		if (!$fp) {
			return;
		}
		$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
		$ua = $mobile
			? 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_0 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.0 Mobile/15E148 Safari/604.1'
			: 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36';
		$req = "GET /?octa_warm=1 HTTP/1.0\r\nHost: " . $host . "\r\nUser-Agent: " . $ua . "\r\nConnection: Close\r\n\r\n";
		stream_set_blocking($fp, false);
		@fwrite($fp, $req);
		@fclose($fp);
	}
}
