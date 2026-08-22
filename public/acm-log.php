<?php
/**
 * Read Laravel log — no Laravel bootstrap needed.
 * Visit: /dev/public/acm-log.php?key=acm2026fix
 * DELETE immediately after use.
 */
define('SECRET', 'acm2026fix');
if (($_GET['key'] ?? '') !== SECRET) { http_response_code(403); die('Forbidden.'); }

header('Content-Type: text/plain; charset=utf-8');

$logFile = dirname(__DIR__) . '/storage/logs/laravel.log';

if (! file_exists($logFile)) {
    echo "Log file not found: $logFile\n";
    exit;
}

$size = filesize($logFile);
echo "Log file size: " . number_format($size) . " bytes\n";
echo "Last modified: " . date('Y-m-d H:i:s', filemtime($logFile)) . "\n\n";

// Show last 100 lines
$lines = file($logFile, FILE_IGNORE_NEW_LINES);
$last  = array_slice($lines, -100);

echo "=== Last 100 lines ===\n\n";
echo implode("\n", $last);
