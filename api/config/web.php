<?php

$config = [
    'homeUrl' => Yii::getAlias('@apiUrl'),
    'controllerNamespace' => 'api\controllers',
    'defaultRoute' => 'api/v1/instances',
    'modules' => [
        'api' => [
            'class' => 'api\modules\api\Module',
            'modules' => [
                'v1' => 'api\modules\api\v1\Module'
            ]
        ]
    ]
];

return $config;
