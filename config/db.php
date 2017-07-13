<?php

$host = getenv("DB_HOST") ?: 'localhost';
$dbname = getenv("DB_NAME") ?: 'micro';

return [
    'class'    => 'yii\db\Connection',
    'dsn'      => "mysql:host=$host;dbname=$dbname",
    'username' => getenv('DB_USER'),
    'password' => getenv('DB_PASSWORD'),
    'charset'  => 'utf8',
];
