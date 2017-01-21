<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => env('DB_DSN'),
    'username' => env('DB_USERNAME'),
    'password' => env('DB_PASSWORD'),
    'tablePrefix' => env('DB_TABLE_PREFIX'),
    'charset' => 'utf8',
    'enableSchemaCache' => true,
    'schemaCacheDuration' => 3600,
    'schemaCache' => 'cache'
];
