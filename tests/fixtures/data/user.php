<?php

return [
    [
        'username' => 'admin',
        'auth_key' => 'test100key',
        'password_hash' => Yii::$app->security->generatePasswordHash('admin'),
        'role' => 'admin',
        'created_at' => time(),
        'updated_at' => time(),
    ],
    [
        'username' => 'user',
        'auth_key' => 'test101key',
        'password_hash' => Yii::$app->security->generatePasswordHash('user'),
        'role' => 'user',
        'created_at' => time(),
        'updated_at' => time(),
    ],
];
