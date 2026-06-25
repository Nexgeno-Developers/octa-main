<?php

/**
 * Loads protected/config/secrets.local.php (not committed to git).
 */
function octa_load_secrets()
{
	static $secrets = null;
	if ($secrets !== null) {
		return $secrets;
	}

	$file = dirname(__FILE__) . '/secrets.local.php';
	if (!file_exists($file)) {
		throw new Exception(
			'Missing protected/config/secrets.local.php. '
			. 'Copy secrets.example.php to secrets.local.php and set your credentials.'
		);
	}

	$secrets = require $file;
	if (!is_array($secrets)) {
		throw new Exception('protected/config/secrets.local.php must return an array.');
	}

	return $secrets;
}
