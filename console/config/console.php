<?php

return [
    'id' => 'console',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'console\controllers',
    'controllerMap' => [
        'command-bus' => [
            'class' => 'trntv\bus\console\BackgroundBusController',
        ],
        'migrate' => [
            'class' => 'yii\console\controllers\MigrateController',
            'migrationNamespaces' => [
                'api\modules\api\migrations'
            ],
            'migrationPath' => '@common/migrations/db',
            'migrationTable' => '{{%system_db_migration}}'
        ],
//        'rbac-migrate' => [
//            'class' => 'console\controllers\RbacMigrateController',
//            'migrationPath' => '@common/migrations/rbac/',
//            'migrationTable' => '{{%system_rbac_migration}}',
//            'templateFile' => '@common/rbac/views/migration.php'
//        ],
    ],
];