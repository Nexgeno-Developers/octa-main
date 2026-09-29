<?php

/**
 * Loads protected/config/secrets.local.php (not committed to git).
 * That file holds local and live credentials. Set "environment" to
 * "local" or "live" on each machine.
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

function octa_env_key()
{
	$secrets = octa_load_secrets();
	if (isset($secrets['environment'])) {
		return strtolower($secrets['environment']) === 'live' ? 'live' : 'local';
	}

	$host = '';
	if (!empty($_SERVER['HTTP_HOST'])) {
		$host = strtolower($_SERVER['HTTP_HOST']);
	} elseif (!empty($_SERVER['SERVER_NAME'])) {
		$host = strtolower($_SERVER['SERVER_NAME']);
	}

	if ($host === '' || strpos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false) {
		return 'local';
	}

	return 'live';
}

function octa_base_url()
{
	$secrets = octa_load_secrets();
	$env = octa_env_key();

	if (isset($secrets['baseUrl'][$env]) && is_string($secrets['baseUrl'][$env])) {
		return rtrim($secrets['baseUrl'][$env], '/');
	}

	if (isset($secrets['baseUrl']) && is_string($secrets['baseUrl'])) {
		return rtrim($secrets['baseUrl'], '/');
	}

	return '';
}

function octa_db_config($name = 'db')
{
	$secrets = octa_load_secrets();
	if (!isset($secrets[$name]) || !is_array($secrets[$name])) {
		throw new Exception('Missing ' . $name . ' in protected/config/secrets.local.php.');
	}

	$config = $secrets[$name];
	$env = octa_env_key();
	if (isset($config[$env]) && is_array($config[$env])) {
		return $config[$env];
	}

	return $config;
}
