<?php
$conf = [
    'db_host' => 'localhost',
    'db_name' => 'u70422',
    'db_user' => 'u70422',
    'db_psw' => '4545635',
];

$urlconf = [
    '/^api\/submit$/' => ['module' => 'form'],
    '/^api\/register$/' => ['module' => 'auth', 'action' => 'register'],
    '/^api\/login$/' => ['module' => 'auth', 'action' => 'login'],
    '/^api\/profile\/(\w+)$/' => ['module' => 'profile', 'auth' => true]
];
