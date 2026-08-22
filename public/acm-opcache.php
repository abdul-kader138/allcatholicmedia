<?php
/**
 * OPcache reset + route check
 * Visit: /dev/public/acm-opcache.php?key=acm2026fix
 * DELETE immediately after use.
 */
define('SECRET', 'acm2026fix');
if (($_GET['key'] ?? '') !== SECRET) { http_response_code(403); die('Forbidden.'); }

header('Content-Type: text/plain; charset=utf-8');

echo "=== OPcache Reset ===\n\n";

if (function_exists('opcache_reset')) {
    $result = opcache_reset();
    echo "opcache_reset(): " . ($result ? 'SUCCESS' : 'FAILED') . "\n";
} else {
    echo "OPcache not available (function_exists=false)\n";
}

if (function_exists('opcache_get_status')) {
    $status = opcache_get_status(false);
    echo "OPcache enabled: " . ($status['opcache_enabled'] ? 'YES' : 'NO') . "\n";
    echo "Cached scripts : " . ($status['opcache_statistics']['num_cached_scripts'] ?? 'n/a') . "\n";
}

// Also clear bootstrap cache files
echo "\n=== Clearing Bootstrap & Framework Cache ===\n";
$baseDir   = dirname(__DIR__);
$cacheDirs = [
    'bootstrap/cache'              => $baseDir . '/bootstrap/cache',
    'storage/framework/cache/data' => $baseDir . '/storage/framework/cache/data',
    'storage/framework/views'      => $baseDir . '/storage/framework/views',
];

foreach ($cacheDirs as $label => $dir) {
    if (!is_dir($dir)) { echo "  SKIP: $label\n"; continue; }
    $count = 0;
    foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS)) as $file) {
        if ($file->isFile() && $file->getFilename() !== '.gitignore') {
            @unlink($file->getPathname()) && $count++;
        }
    }
    echo "  $label: deleted $count files\n";
}

// Check key files are the right version
echo "\n=== File Version Check ===\n";
$files = [
    'DonationController' => $baseDir . '/app/Http/Controllers/DonationController.php',
    'routes/web.php'     => $baseDir . '/routes/web.php',
];

foreach ($files as $label => $path) {
    if (!file_exists($path)) { echo "  $label: NOT FOUND\n"; continue; }
    $content = file_get_contents($path);
    echo "  $label:\n";
    echo "    Size     : " . number_format(strlen($content)) . " bytes\n";
    echo "    Modified : " . date('Y-m-d H:i:s', filemtime($path)) . "\n";
    if ($label === 'DonationController') {
        echo "    guestForm exists  : " . (str_contains($content, 'function guestForm') ? 'YES' : 'NO ← WRONG FILE') . "\n";
        echo "    guestInitiate exists: " . (str_contains($content, 'function guestInitiate') ? 'YES' : 'NO') . "\n";
    }
    if ($label === 'routes/web.php') {
        echo "    donation.guest routes: " . (str_contains($content, 'donation.guest') ? 'YES' : 'NO ← MISSING') . "\n";
        echo "    guestForm route  : " . (str_contains($content, 'guestForm') ? 'YES' : 'NO ← MISSING') . "\n";
    }
}

echo "\n=== Done. DELETE this file! ===\n";
