<?php

namespace App\Controllers;

class AuthController
{
    public function home()
    {
        echo "<h1>Selamat Datang di SI Akademik</h1>";
        echo '<p><a href="/SI_AKADEMIK/public/login">Login</a></p>';
    }

    public function login()
    {
        $error = null;
        require_once __DIR__ . '/../Views/auth/login.php';
    }

    public function process()
    {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($username === 'admin' && $password === '12345') {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            header('Location: /SI_AKADEMIK/public/dashboard');
            exit;
        } else {
            $error = 'Username atau password salah.';
            require_once __DIR__ . '/../Views/auth/login.php';
        }
    }

    public function dashboard()
    {
        require_once __DIR__ . '/../Views/dashboard/index.php';
    }

    public function logout()
    {
        $_SESSION = [];
        session_destroy();
        header('Location: /SI_AKADEMIK/public/login');
        exit;
    }
}