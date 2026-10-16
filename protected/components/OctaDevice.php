<?php

/**
 * Tiny device helper. Phones never reach the desktop breakpoint (>1024px), so the heavy desktop mega menu
 * markup is skipped for them; the mobile off-canvas navigation already contains every link.
 * A phone that is rotated/resized past the breakpoint sets the "octa_desktop" cookie (see layout) and gets the full menu.
 */
class OctaDevice
{
	public static function skipDesktopMegaMenu()
	{
		if (isset($_COOKIE['octa_desktop'])) {
			return false;
		}
		$ua = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
		return (bool) preg_match('/Mobi|iPhone|iPod|Android.+Mobile/i', $ua);
	}
}
