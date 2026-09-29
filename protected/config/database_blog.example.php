<?php

/**
 * Blog database config is loaded from secrets.local.php.
 * Copy secrets.example.php to secrets.local.php and configure the db_blog section.
 */
require_once dirname(__FILE__) . '/load-secrets.php';

$config = octa_db_config('db_blog');
if (!isset($config['class'])) {
	$config['class'] = 'CDbConnection';
}

return $config;
