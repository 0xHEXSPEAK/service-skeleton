<?php
// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

// Composer
require(__DIR__ . '/../../vendor/autoload.php');
// Yii
require(__DIR__ . '/../../vendor/yiisoft/yii2/Yii.php');
// Environment
require(__DIR__ . '/../../common/env.php');
// Bootstrap
require(__DIR__ . '/../config/bootstrap.php');
require(__DIR__ . '/../../common/config/bootstrap.php');

$config = \yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../common/config/base.php'),
    require(__DIR__ . '/../../common/config/web.php'),
    require(__DIR__ . '/../config/base.php'),
    require(__DIR__ . '/../config/web.php')
);

$app = new yii\web\Application($config);
$app->run();