<?php

/**
 * Blog database config is loaded from secrets.local.php.
 * Copy secrets.example.php to secrets.local.php and configure the db_blog section.
 */
require_once dirname(__FILE__) . '/load-secrets.php';

return octa_load_secrets()['db_blog'];
