<?php

/**
 * Post-processes rendered HTML so <img> tags are friendlier to Core Web Vitals:
 *  - adds width/height (from the real file) to local images, which prevents layout shift
 *  - adds loading="lazy" to images after the first few (the likely above-the-fold ones)
 *  - adds decoding="async"
 *
 * Only local images that can be resolved to a file under the web root are measured; everything else is left alone.
 */
class ImageOptimizer
{
	/** Number of leading images that stay eager (header logo, hero, etc.). */
	const EAGER_COUNT = 4;

	private static $cache;
	private static $cacheDirty = false;

	public static function filter($html)
	{
		if (!is_string($html) || stripos($html, '<img') === false) {
			return $html;
		}

		$count = 0;
		$html = preg_replace_callback('/<img\b[^>]*>/i', function ($m) use (&$count) {
			$tag = $m[0];
			$count++;

			// explicit opt-out for <picture> images whose sources have different aspect ratios
			if (strpos($tag, 'data-nodim') !== false) {
				$tag = str_replace(' data-nodim="1"', '', $tag);
				$nodim = true;
			} else {
				$nodim = false;
			}

			// lazysizes-style images (no src) and images that already opt in/out are left as they are
			if (!preg_match('/\ssrc\s*=\s*(["\'])(.*?)\1/i', $tag, $src)) {
				return $tag;
			}

			if (!preg_match('/\sloading\s*=/i', $tag) && !preg_match('/\sfetchpriority\s*=/i', $tag) && $count > self::EAGER_COUNT) {
				$tag = self::addAttr($tag, 'loading="lazy"');
			}
			if (!preg_match('/\sdecoding\s*=/i', $tag)) {
				$tag = self::addAttr($tag, 'decoding="async"');
			}
			if (!$nodim && !preg_match('/\s(width|height)\s*=/i', $tag) &&!preg_match('/\sstyle\s*=\s*["\'][^"\']*(width|height)/i', $tag)) {
				$dims = self::dimensions($src[2]);
				if ($dims) {
					$tag = self::addAttr($tag, 'width="' . $dims[0] . '" height="' . $dims[1] . '"');
				}
			}
			return $tag;
		}, $html);

		self::saveCache();
		return $html;
	}

	private static function addAttr($tag, $attr)
	{
		return preg_replace('/\s*\/?>$/', ' ' . $attr . '$0', $tag, 1);
	}

	private static function dimensions($url)
	{
		$url = html_entity_decode($url);
		if (preg_match('#^(data:|//|https?://(?!' . preg_quote(self::host(), '#') . '))#i', $url)) {
			return null;
		}
		$path = parse_url($url, PHP_URL_PATH);
		if (!$path) {
			return null;
		}
		$path = rawurldecode($path);
		$base = Yii::app()->request->baseUrl;
		if ($base !== '' && strpos($path, $base . '/') === 0) {
			$path = substr($path, strlen($base));
		}
		if (!preg_match('/\.(png|jpe?g|gif|webp)$/i', $path) || strpos($path, '..') !== false) {
			return null;
		}
		$file = Yii::getPathOfAlias('webroot') . $path;
		if (!is_file($file)) {
			return null;
		}

		$cache = self::loadCache();
		$key = $path;
		$mtime = filemtime($file);
		if (isset($cache[$key]) && $cache[$key][2] === $mtime) {
			return array($cache[$key][0], $cache[$key][1]);
		}
		$info = @getimagesize($file);
		if (!$info || $info[0] < 1 || $info[1] < 1) {
			return null;
		}
		self::$cache[$key] = array($info[0], $info[1], $mtime);
		self::$cacheDirty = true;
		return array($info[0], $info[1]);
	}

	private static function host()
	{
		return isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
	}

	private static function cacheFile()
	{
		return Yii::app()->getRuntimePath() . DIRECTORY_SEPARATOR . 'image_dimensions.json';
	}

	private static function loadCache()
	{
		if (self::$cache === null) {
			$f = self::cacheFile();
			$data = is_file($f) ? json_decode((string) @file_get_contents($f), true) : null;
			self::$cache = is_array($data) ? $data : array();
		}
		return self::$cache;
	}

	private static function saveCache()
	{
		if (self::$cacheDirty) {
			@file_put_contents(self::cacheFile(), json_encode(self::$cache), LOCK_EX);
			self::$cacheDirty = false;
		}
	}
}
