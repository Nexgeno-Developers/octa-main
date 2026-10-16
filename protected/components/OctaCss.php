<?php

/**
 * Freshness check for the generated css/critical-mobile.css and css/phone-home.css.
 * The hash is calculated from the source stylesheets with line endings normalised (CRLF == LF), so a file that was
 * built on Windows still matches after a Linux checkout. The result is cached in runtime/ until a source changes.
 */
class OctaCss
{
	public static function hash(array $relativeFiles)
	{
		$root = Yii::getPathOfAlias('webroot') . '/css/';
		$sig = '';
		foreach ($relativeFiles as $f) {
			$sig .= $f . ':' . (is_file($root . $f) ? filemtime($root . $f) . '/' . filesize($root . $f) : '-') . ';';
		}
		$sig = md5($sig);
		$cacheFile = Yii::app()->getRuntimePath() . DIRECTORY_SEPARATOR . 'octacss_hash_' . $sig . '.txt';
		if (is_file($cacheFile)) {
			return (string) file_get_contents($cacheFile);
		}
		$parts = '';
		foreach ($relativeFiles as $f) {
			$parts .= is_file($root . $f) ? md5(str_replace("\r\n", "\n", (string) file_get_contents($root . $f))) : '';
		}
		$hash = md5($parts);
		@file_put_contents($cacheFile, $hash);
		return $hash;
	}
}
