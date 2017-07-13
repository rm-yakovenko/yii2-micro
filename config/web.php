<?php

$common = require(__DIR__ . '/common.php');

return \yii\helpers\ArrayHelper::merge($common, [
    'defaultRoute' => 'site/index',

    'components' => [
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'user'         => [
            'identityClass'   => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'request'      => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'test',
        ],
    ],
]);
