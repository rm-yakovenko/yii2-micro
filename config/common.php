<?php

$dotenv = new Dotenv\Dotenv(__DIR__ . '/..');
$dotenv->load();

$params = require(__DIR__ . '/params.php');

$config = [
    'id'          => 'micro',
    'basePath'    => __DIR__ . "/../app",
    'language'    => 'uk-UA',
    'bootstrap'   => ['log'],
    'vendorPath'  => __DIR__ . '/../vendor',
    'runtimePath' => __DIR__ . '/../runtime',
    'container' => require __DIR__ . '/container.php',
    'components'  => [
        'cache'      => [
            'class' => 'yii\caching\FileCache',
        ],
        'mailer'     => [
            'class'            => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log'        => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db'         => require(__DIR__ . '/db.php'),
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName'  => false,
            'rules'           => require(__DIR__ . '/routes.php'),
        ],
    ],
    'params'      => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
//    $config['bootstrap'][] = 'debug';
//    $config['modules']['debug'] = [
//        'class' => 'yii\debug\Module',
//        // uncomment the following to add your IP if you are not connecting from localhost.
//        //'allowedIPs' => ['127.0.0.1', '::1'],
//    ];

//    $config['bootstrap'][] = 'gii';
//    $config['modules']['gii'] = [
//        'class' => 'yii\gii\Module',
//        // uncomment the following to add your IP if you are not connecting from localhost.
//        //'allowedIPs' => ['127.0.0.1', '::1'],
//    ];
}

return $config;
