<?php

$common = require(__DIR__ . '/common.php');
Yii::setAlias('tests', __DIR__ . '/../tests');
Yii::setAlias('webroot', __DIR__ . '/../web');

return \yii\helpers\ArrayHelper::merge($common, [
    'controllerNamespace' => 'app\commands',

    'controllerMap' => [
        'fixture' => [
            'class' => 'yii\faker\FixtureController',
        ],
    ],
]);
