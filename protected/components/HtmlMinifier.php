<?php

/**
 * Light-weight, conservative HTML minifier for rendered pages.
 *  - strips ordinary HTML comments (conditional comments are kept)
 *  - collapses runs of whitespace to a single space
 * <script>, <style>, <pre>, <textarea> contents are never touched, so inline JS with "//" comments stays valid.
 */
class HtmlMinifier
{
	public static function minify($html)
	{
		if (!is_string($html) || $html === '') {
			return $html;
		}

		$stash = array();
		// One pass, in document order: comments are dropped (conditional ones kept), raw-text elements are stashed untouched.
		$out = preg_replace_callback(
			'#<!--.*?-->|<(script|style|pre|textarea)\b[^>]*>.*?</\1\s*>#is',
			function ($m) use (&$stash) {
				if (strncmp($m[0], '<!--', 4) === 0) {
					if (!preg_match('/^<!--\s*\[if|^<!--<!\[endif|^<!--\s*\[endif/i', $m[0])) {
						return '';
					}
				}
				$block = $m[0];
				// JSON-LD can be compacted safely when it is valid JSON
				if (stripos($block, 'application/ld+json') !== false && preg_match('#^(<script\b[^>]*>)(.*)(</script\s*>)$#is', $block, $parts)) {
					$data = json_decode($parts[2], true);
					if ($data !== null) {
						$block = $parts[1] . json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . $parts[3];
					}
				}
				$stash[] = $block;
				return "\x01" . (count($stash) - 1) . "\x02";
			},
			$html
		);
		if ($out === null) {
			return $html; // regex backtrack limit hit: serve the page untouched
		}

		// whitespace between and inside tags
		$out = preg_replace('/\s+/', ' ', $out);
		if ($out === null) {
			return $html;
		}

		$out = preg_replace_callback('/\x01(\d+)\x02/', function ($m) use (&$stash) {
			return $stash[(int) $m[1]];
		}, $out);

		return $out === null ? $html : $out;
	}
}
