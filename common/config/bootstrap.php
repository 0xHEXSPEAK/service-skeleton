<?php
/**
 * Require core files
 */
require_once(__DIR__ . '/../helpers.php');

// Setting aliases
Yii::setAlias('@api', realpath(__DIR__ . '/../../api'));
Yii::setAlias('@base', realpath(__DIR__.'/../../'));
Yii::setAlias('@common', realpath(__DIR__.'/../../common'));
Yii::setAlias('@console', realpath(__DIR__.'/../../console'));
//Yii::setAlias('@tests', realpath(__DIR__.'/../../tests'));

/**
 * Setting url aliases
 */
Yii::setAlias('@apiEndpoint', env('API_ENDPOINT'));
Yii::setAlias('@apiUrl', env('API_URL'));