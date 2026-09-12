<?php

namespace App\Middleware;

class AuthMiddleware
{
    public function handle()
    {
        if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
            header('Location: /SI_AKADEMIK/public/login');
            exit;
        }
    }
}