<?php

/**
 * Builds the phone/desktop WebP copies of a homepage slider image.
 * The homepage only points at a copy when this returns a filename, so a failure just keeps the original.
 */
class OctaSliderImage
{
	public static function existing($dir, $file, $width)
	{
		return self::resolve($dir, $file, $width, false);
	}

	public static function variant($dir, $file, $width)
	{
		return self::resolve($dir, $file, $width, true);
	}

	public static function mime($file)
	{
		if (preg_match('/\.webp$/i', $file)) {
			return 'image/webp';
		}
		if (preg_match('/\.png$/i', $file)) {
			return 'image/png';
		}
		if (preg_match('/\.(jpe?g|jfif)$/i', $file)) {
			return 'image/jpeg';
		}
		if (preg_match('/\.gif$/i', $file)) {
			return 'image/gif';
		}
		return '';
	}

	private static function resolve($dir, $file, $width, $create)
	{
		$file = basename((string) $file);
		$width = (int) $width;
		if ($file === '' || $width < 1 || preg_match('/\.php$/i', $file)) {
			return null;
		}
		if (!preg_match('/\.(jpe?g|jfif|png|gif|webp)$/i', $file)) {
			return null;
		}
		$src = rtrim($dir, '/\\') . DIRECTORY_SEPARATOR . $file;
		if (!is_file($src)) {
			return null;
		}
		$name = preg_replace('/\.[^.]+$/', '', $file) . '-' . $width . '.webp';
		$dest = rtrim($dir, '/\\') . DIRECTORY_SEPARATOR . $name;
		if (is_file($dest) && filemtime($dest) >= filemtime($src) && filesize($dest) > 80) {
			return $name;
		}
		if (!$create) {
			return null;
		}
		if (!self::write($src, $dest, $width)) {
			return null;
		}
		return $name;
	}

	private static function write($src, $dest, $width)
	{
		if (!function_exists('imagewebp') || !function_exists('imagecreatefromstring')) {
			return false;
		}
		$size = @filesize($src);
		if ($size === false || $size < 1 || $size > 12 * 1024 * 1024) {
			return false;
		}
		$raw = @file_get_contents($src);
		if ($raw === false) {
			return false;
		}
		$im = @imagecreatefromstring($raw);
		if (!$im) {
			return false;
		}
		$w = imagesx($im);
		$h = imagesy($im);
		if ($w < 1 || $h < 1) {
			imagedestroy($im);
			return false;
		}
		if ($w > $width) {
			$nh = max(1, (int) round($h * ($width / $w)));
			$dst = imagecreatetruecolor($width, $nh);
			imagealphablending($dst, false);
			imagesavealpha($dst, true);
			$clear = imagecolorallocatealpha($dst, 0, 0, 0, 127);
			imagefilledrectangle($dst, 0, 0, $width, $nh, $clear);
			imagecopyresampled($dst, $im, 0, 0, 0, 0, $width, $nh, $w, $h);
			imagedestroy($im);
			$im = $dst;
		} elseif (function_exists('imagepalettetotruecolor')) {
			@imagepalettetotruecolor($im);
		}
		$tmp = $dest . '.tmp.' . getmypid();
		$ok = @imagewebp($im, $tmp, 68);
		imagedestroy($im);
		if (!$ok || !is_file($tmp) || filesize($tmp) < 80) {
			@unlink($tmp);
			return false;
		}
		if (is_file($dest)) {
			@unlink($dest);
		}
		if (!@rename($tmp, $dest)) {
			@unlink($tmp);
			return false;
		}
		return true;
	}
}
