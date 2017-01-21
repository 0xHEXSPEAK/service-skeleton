<?php

$config = [
    'name' => 'Registryd Service Storage',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'extensions' => require(__DIR__ . '/../../vendor/yiisoft/extensions.php'),
    'bootstrap' => ['log'],
    'components' => [
//        'cache' => [
//            'class' => 'yii\caching\FileCache',
//            'cachePath' => '@common/runtime/cache'
//        ],
        'db' => require(__DIR__ . '/db.php'),
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                'db' => [
                    'class' => 'yii\log\DbTarget',
                    'levels' => ['error', 'warning'],
                    'except' => ['yii\web\HttpException:*', 'yii\i18n\I18N\*'],
                    'prefix' => function () {
                        $url = !Yii::$app->request->isConsoleRequest ? Yii::$app->request->getUrl() : null;
                        return sprintf('[%s][%s]', Yii::$app->id, $url);
                    },
                    'logVars' => [],
                    'logTable' => '{{%system_log}}'
                ]
            ],
        ],
    ],
    'params' => [
        'adminEmail' => env('ADMIN_EMAIL'),
        'robotEmail' => env('ROBOT_EMAIL'),
        'availableLocales' => [
            'en-US'=>'English (US)',
        ],
    ],
];

if (YII_ENV_PROD) {
    $config['components']['log']['targets']['email'] = [
        'class' => 'yii\log\EmailTarget',
        'except' => ['yii\web\HttpException:*'],
        'levels' => ['error', 'warning'],
        'message' => ['from' => env('ROBOT_EMAIL'), 'to' => env('ADMIN_EMAIL')]
    ];
}

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class'=>'yii\gii\Module'
    ];

//    $config['components']['cache'] = [
//        'class' => 'yii\caching\DummyCache'
//    ];
}

return $config;