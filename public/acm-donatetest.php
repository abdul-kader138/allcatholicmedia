<?php
/**
 * Donate page render diagnostic — bootstraps Laravel fully.
 * Visit: /dev/public/acm-donatetest.php?key=acm2026fix
 * DELETE immediately after use.
 */
define('SECRET', 'acm2026fix');
if (($_GET['key'] ?? '') !== SECRET) { http_response_code(403); die('Forbidden.'); }

header('Content-Type: text/plain; charset=utf-8');

// Capture ALL errors
error_reporting(E_ALL);
ini_set('display_errors', '1');

require __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$app->boot();

echo "=== Donate Page Diagnostic ===\n\n";

// 1. Check view file exists
$baseDir = dirname(__DIR__);
$viewPaths = [
    'echo-politics view' => $baseDir . '/platform/themes/echo-politics/views/donations/guest-form.blade.php',
    'echo view (fallback)' => $baseDir . '/platform/themes/echo/views/donations/guest-form.blade.php',
];
echo "── View Files ──\n";
foreach ($viewPaths as $label => $path) {
    $exists = file_exists($path);
    $size   = $exists ? filesize($path) : 0;
    echo "  $label: " . ($exists ? "EXISTS ($size bytes)" : "NOT FOUND") . "\n";
    echo "    Path: $path\n";
}
echo "\n";

// 2. Active theme
echo "── Active Theme ──\n";
try {
    $activeTheme = \Botble\Theme\Facades\Theme::getThemeName();
    echo "  Active theme: $activeTheme\n";
} catch (\Throwable $e) {
    echo "  Could not get theme: " . $e->getMessage() . "\n";
}
echo "\n";

// 3. Try rendering the view directly
echo "── View Render Test ──\n";
try {
    $view = view()->getFinder()->find('theme.donations.guest-form');
    echo "  View resolved to: $view\n";
} catch (\Throwable $e) {
    echo "  View find error: " . $e->getMessage() . "\n";
}

try {
    ob_start();
    $rendered = \Illuminate\Support\Facades\View::make(
        'theme.donations.guest-form',
        ['presetAmounts' => [5, 10, 25, 50, 100]]
    )->render();
    ob_end_clean();
    echo "  Render result: " . strlen($rendered) . " bytes\n";
    echo "  First 200 chars: " . substr(strip_tags($rendered), 0, 200) . "\n";
} catch (\Throwable $e) {
    ob_end_clean();
    echo "  Render FAILED: " . $e->getMessage() . "\n";
    echo "  File: " . $e->getFile() . " line " . $e->getLine() . "\n";
}
echo "\n";

// 4. Check recent log entries
echo "── Recent Laravel Log (last 30 lines) ──\n";
$logFile = $baseDir . '/storage/logs/laravel.log';
if (file_exists($logFile) && filesize($logFile) > 0) {
    $lines = file($logFile);
    $last  = array_slice($lines, -30);
    echo implode('', $last);
} else {
    echo "  Log empty or not found.\n";
}

echo "\n=== Done. DELETE this file! ===\n";
