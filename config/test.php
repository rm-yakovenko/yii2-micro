<?php

$web = require(__DIR__ . '/web.php');

return \yii\helpers\ArrayHelper::merge($web, [
    'components' => [
        'assetManager' => [
            'basePath' => __DIR__ . '/../web/assets',
        ],
    ],
]);
