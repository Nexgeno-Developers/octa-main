<?php

/**
 * Database config is loaded from secrets.local.php.
 * The active profile follows the "environment" value (local or live).
 */
require_once dirname(__FILE__) . '/load-secrets.php';

return octa_db_config('db');
