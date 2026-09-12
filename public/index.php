<?php
// public/index.php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../routes/web.php';

require_once __DIR__ . '/../app/Controllers/MahasiswaController.php';
require_once __DIR__ . '/../app/Controllers/DosenController.php';
require_once __DIR__ . '/../app/Controllers/AuthController.php';
require_once __DIR__ . '/../app/Middleware/AuthMiddleware.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$base = '/SI_AKADEMIK/public';
if (str_starts_with($uri, $base)) {
    $uri = substr($uri, strlen($base)) ?: '/';
}

$method = $_SERVER['REQUEST_METHOD'];

// Route dinamis /mahasiswa/{nim} — dilindungi middleware
if ($method === 'GET' && preg_match('#^/mahasiswa/([^/]+)$#', $uri, $matches)) {
    $middleware = new \App\Middleware\AuthMiddleware();
    $middleware->handle();

    $nim = $matches[1];
    $controller = new \App\Controllers\MahasiswaController();
    $controller->detail($nim);
    exit;
}

if (isset($routes[$method][$uri])) {
    [$controllerName, $action, $needsAuth] = $routes[$method][$uri];

    if ($needsAuth) {
        $middleware = new \App\Middleware\AuthMiddleware();
        $middleware->handle();
    }

    $controllerClass = "App\\Controllers\\{$controllerName}";
    $controller = new $controllerClass();
    $controller->$action();
} else {
    http_response_code(404);
    echo "404 - Halaman tidak ditemukan";
}