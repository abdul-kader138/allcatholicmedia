<?php
/**
 * Lightweight routing/path diagnostic for subfolder deployments.
 * Visit: /dev/public/acm-routecheck.php?key=acm2026fix
 * DELETE after use.
 */
define('SECRET', 'acm2026fix');
if (($_GET['key'] ?? '') !== SECRET) { http_response_code(403); die('Forbidden.'); }

header('Content-Type: text/plain; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', '1');

echo "=== Raw Server Vars ===\n";
foreach ([
    'REQUEST_URI',
    'SCRIPT_NAME',
    'PHP_SELF',
    'ORIG_SCRIPT_NAME',
    'DOCUMENT_ROOT',
    'SCRIPT_FILENAME',
    'HTTP_HOST',
    'HTTPS',
] as $key) {
    echo str_pad($key, 18) . ': ' . ($_SERVER[$key] ?? '(missing)') . "\n";
}

$baseDir = dirname(__DIR__);

echo "\n=== App Files ===\n";
foreach ([
    '.env' => $baseDir . '/.env',
    '.htaccess' => $baseDir . '/.htaccess',
    'public/index.php' => $baseDir . '/public/index.php',
    'bootstrap/app.php' => $baseDir . '/bootstrap/app.php',
    'bootstrap/cache/services.php' => $baseDir . '/bootstrap/cache/services.php',
    'bootstrap/cache/packages.php' => $baseDir . '/bootstrap/cache/packages.php',
] as $label => $path) {
    echo str_pad($label, 28) . ': ' . (file_exists($path) ? 'FOUND' : 'MISSING');
    if (file_exists($path)) {
        echo ' | ' . date('Y-m-d H:i:s', filemtime($path));
    }
    echo "\n";
}

echo "\n=== .env URL Lines ===\n";
if (file_exists($baseDir . '/.env')) {
    foreach (file($baseDir . '/.env', FILE_IGNORE_NEW_LINES) as $line) {
        if (preg_match('/^(APP_URL|FORCE_ROOT_URL|FORCE_SCHEMA|FILESYSTEM_PUBLIC_ROOT)=/', $line)) {
            echo $line . "\n";
        }
    }
}

echo "\n=== Laravel Bootstrap ===\n";
try {
    require __DIR__ . '/../vendor/autoload.php';
    $app = require __DIR__ . '/../bootstrap/app.php';
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    $kernel->bootstrap();

    $request = Illuminate\Http\Request::capture();
    echo "request()->root()       : " . $request->root() . "\n";
    echo "request()->url()        : " . $request->url() . "\n";
    echo "request()->path()       : " . $request->path() . "\n";
    echo "request()->getBaseUrl() : " . $request->getBaseUrl() . "\n";
    echo "request()->getPathInfo(): " . $request->getPathInfo() . "\n";

    $router = $app->make('router');
    $routes = $router->getRoutes();

    echo "\n=== Route Match Checks ===\n";
    foreach (['/', '/dev', '/public', '/dev/public'] as $path) {
        try {
            $testRequest = Illuminate\Http\Request::create($path, 'GET');
            $matched = $routes->match($testRequest);
            echo str_pad($path, 14) . ' => ' . ($matched->getName() ?? '(unnamed)') . ' | ' . $matched->uri() . "\n";
        } catch (Throwable $e) {
            echo str_pad($path, 14) . ' => ERROR: ' . $e->getMessage() . "\n";
        }
    }
} catch (Throwable $e) {
    echo 'BOOT FAILED: ' . $e->getMessage() . "\n";
    echo 'FILE: ' . $e->getFile() . ':' . $e->getLine() . "\n";
}

echo "\n=== Done. DELETE this file! ===\n";
