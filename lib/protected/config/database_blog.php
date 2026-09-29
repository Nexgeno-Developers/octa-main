<?php

require_once dirname(__FILE__) . '/../../../protected/config/load-secrets.php';

$config = octa_db_config('db_blog');
if (!isset($config['class'])) {
	$config['class'] = 'CDbConnection';
}

return $config;
