<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/yii/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

require_once(dirname(__FILE__).'/protected/config/load-secrets.php');

// Debug output is controlled only from protected/config/secrets.local.php.
defined('YII_DEBUG') or define('YII_DEBUG', octa_debug_enabled());
// Keep stack traces out of production responses.
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', YII_DEBUG ? 3 : 0);

require_once($yii);

//phpexcel




$app=Yii::createWebApplication($config);

    Yii::import('ext.yiiexcel.YiiExcel', true);
    Yii::registerAutoloader(array('YiiExcel', 'autoload'), true);
 
     // Optional:
    //  As we always try to run the autoloader before anything else, we can use it to do a few
//    //      simple checks and initialisations
//    PHPExcel_Shared_ZipStreamWrapper::register();
// 
//    if (ini_get('mbstring.func_overload') & 2) {
//        throw new Exception('Multibyte function overloading in PHP must be disabled for string functions (2).');
//    }
//    PHPExcel_Shared_String::buildCharacterSets();
$app->run();
