<?php

/**
 * Blog database config is loaded from secrets.local.php.
 * The active profile follows the "environment" value (local or live).
 */
require_once dirname(__FILE__) . '/load-secrets.php';

$config = octa_db_config('db_blog');
if (!isset($config['class'])) {
	$config['class'] = 'CDbConnection';
}

return $config;
