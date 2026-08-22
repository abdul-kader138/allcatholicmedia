<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// When the app is deployed in a subfolder (for example /dev) but Apache
// internally serves requests through /public/index.php, Symfony can detect
// the wrong base URL (/dev/public) and Laravel then treats "dev" as a slug.
// Normalize the server vars using SCRIPT_NAME directly so this works even
// before Laravel has loaded .env values into the process.
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
$publicIndexSuffix = '/public/index.php';

if ($scriptName && str_ends_with($scriptName, $publicIndexSuffix)) {
    $visibleBasePath = substr($scriptName, 0, -strlen($publicIndexSuffix));
    $visibleBasePath = rtrim($visibleBasePath, '/');

    foreach (['SCRIPT_NAME', 'PHP_SELF', 'ORIG_SCRIPT_NAME'] as $serverKey) {
        if (! empty($_SERVER[$serverKey]) && str_ends_with($_SERVER[$serverKey], $publicIndexSuffix)) {
            $_SERVER[$serverKey] = ($visibleBasePath ?: '') . '/index.php';
        }
    }

    if (! empty($_SERVER['REQUEST_URI'])) {
        $requestUriParts = parse_url($_SERVER['REQUEST_URI']);
        $requestPath = $requestUriParts['path'] ?? '';
        $publicPrefix = ($visibleBasePath ?: '') . '/public';

        if ($requestPath === $publicPrefix || str_starts_with($requestPath, $publicPrefix . '/')) {
            $normalizedPath = ($visibleBasePath ?: '') . substr($requestPath, strlen($publicPrefix));
            $_SERVER['REQUEST_URI'] = $normalizedPath . (isset($requestUriParts['query']) ? '?' . $requestUriParts['query'] : '');
        }
    }
}

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
$app = require_once __DIR__ . '/../bootstrap/app.php';

$app->usePublicPath(__DIR__);

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
