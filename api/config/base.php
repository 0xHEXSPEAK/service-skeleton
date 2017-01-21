<?php

$config = [
    'id' => 'api',
    'basePath' => dirname(__DIR__),
    'components' => [
        'urlManager' => require(__DIR__ . '/_urlManager.php'),
    ]
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;