<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=' . env('POSTGRES_HOST') . ';dbname=' . env('POSTGRES_DB'),
    'username' => env('POSTGRES_USER'),
    'password' => env('POSTGRES_PASSWORD'),
    'charset' => 'utf8',
];
