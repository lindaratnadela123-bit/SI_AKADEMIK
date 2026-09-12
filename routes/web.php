<?php
// routes/web.php

$routes = [
    'GET' => [
        '/'          => ['AuthController', 'home', false],
        '/login'     => ['AuthController', 'login', false],
        '/logout'    => ['AuthController', 'logout', false],
        '/dashboard' => ['AuthController', 'dashboard', true],
        '/mahasiswa' => ['MahasiswaController', 'index', true],
        '/dosen'     => ['DosenController', 'index', true],
    ],
    'POST' => [
        '/login/process' => ['AuthController', 'process', false],
    ],
];