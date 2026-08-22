<?php
/**
 * AllCatholicMedia — Server Diagnostic & Fix Tool
 * Upload to public/ on cPanel, visit the URL, then DELETE this file immediately.
 * URL: https://allcatholicmedia.com/dev/public/acm-diag.php
 */

// Basic security: only allow from your IP or with a secret key in the URL
// Change this to your actual server IP or remove the check during testing
define('SECRET', 'acm2026fix');
if (($_GET['key'] ?? '') !== SECRET) {
    http_response_code(403);
    die('Forbidden. Add ?key=acm2026fix to the URL.');
}

header('Content-Type: text/plain; charset=utf-8');

$publicDir  = __DIR__;                                    // /path/to/public
$baseDir    = dirname($publicDir);                        // /path/to/project root
$storageDir = $baseDir . '/storage/app/public';
$logsDir    = $baseDir . '/storage/logs';
$symlinkTarget = $publicDir . '/storage';

echo "=== AllCatholicMedia Server Diagnostic ===\n";
echo "Date: " . date('Y-m-d H:i:s') . "\n";
echo "PHP: " . PHP_VERSION . "\n";
echo "Server: " . ($_SERVER['SERVER_SOFTWARE'] ?? 'unknown') . "\n\n";

// ── 1. Paths ────────────────────────────────────────────────────────────────
echo "── Paths ──\n";
echo "Public dir  : $publicDir\n";
echo "Base dir    : $baseDir\n";
echo "Storage dir : $storageDir\n\n";

// ── 2. Writable checks ──────────────────────────────────────────────────────
echo "── Writable Checks ──\n";
$dirs = [
    'storage/app/public'   => $storageDir,
    'storage/logs'         => $logsDir,
    'storage/framework'    => $baseDir . '/storage/framework',
    'bootstrap/cache'      => $baseDir . '/bootstrap/cache',
];
foreach ($dirs as $label => $path) {
    $exists   = is_dir($path);
    $writable = $exists && is_writable($path);
    echo sprintf("  %-30s exists=%-3s writable=%s\n",
        $label, $exists ? 'YES' : 'NO', $writable ? 'YES' : 'NO');
}
echo "\n";

// ── 3. Storage symlink ──────────────────────────────────────────────────────
echo "── Storage Symlink (public/storage) ──\n";
if (is_link($symlinkTarget)) {
    echo "  Symlink EXISTS → " . readlink($symlinkTarget) . "\n";
    echo "  Target accessible: " . (file_exists($symlinkTarget) ? 'YES' : 'NO (broken link)') . "\n";
} elseif (is_dir($symlinkTarget)) {
    echo "  WARNING: public/storage is a real DIRECTORY, not a symlink.\n";
} else {
    echo "  Symlink MISSING. Attempting to create...\n";
    if (is_dir($storageDir)) {
        $ok = symlink($storageDir, $symlinkTarget);
        echo "  Create symlink: " . ($ok ? 'SUCCESS' : 'FAILED — try creating manually in cPanel File Manager') . "\n";
    } else {
        echo "  Cannot create: storage/app/public directory not found.\n";
    }
}
echo "\n";

// ── 4. Write test ───────────────────────────────────────────────────────────
echo "── Storage Write Test ──\n";
$testPath = $storageDir . '/diag-test-' . time() . '.txt';
$written = @file_put_contents($testPath, 'write-test');
if ($written !== false) {
    echo "  Write OK: $testPath\n";
    @unlink($testPath);
} else {
    echo "  Write FAILED to: $testPath\n";
    echo "  Error: " . error_get_last()['message'] . "\n";
}
echo "\n";

// ── 5. Outbound HTTP test ───────────────────────────────────────────────────
echo "── Outbound HTTP Test (critical for RSS images) ──\n";
$testUrls = [
    'HTTP  (small image)' => 'https://www.catholicnewsagency.com/favicon.ico',
    'HTTPS (RSS feed)'    => 'https://aleteia.org/feed/',
];

foreach ($testUrls as $label => $url) {
    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT        => 10,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_USERAGENT      => 'AllCatholicMedia/1.0',
            CURLOPT_NOBODY         => ($label === 'HTTP  (small image)'),
        ]);
        $body  = curl_exec($ch);
        $info  = curl_getinfo($ch);
        $error = curl_error($ch);
        curl_close($ch);

        echo sprintf("  %-22s HTTP=%d  size=%d bytes  error=%s\n",
            $label,
            $info['http_code'],
            strlen($body ?: ''),
            $error ?: 'none'
        );
    } else {
        echo "  cURL is NOT installed/enabled on this server — images CANNOT be downloaded.\n";
        break;
    }
}
echo "\n";

// ── 6. PHP extensions ───────────────────────────────────────────────────────
echo "── Required PHP Extensions ──\n";
$exts = ['curl', 'gd', 'simplexml', 'json', 'mbstring', 'pdo', 'pdo_mysql', 'fileinfo', 'openssl'];
foreach ($exts as $ext) {
    echo sprintf("  %-12s %s\n", $ext, extension_loaded($ext) ? 'OK' : 'MISSING');
}
echo "\n";

// ── 7. PHP settings ─────────────────────────────────────────────────────────
echo "── PHP Settings ──\n";
echo "  allow_url_fopen : " . ini_get('allow_url_fopen') . "\n";
echo "  max_execution_time: " . ini_get('max_execution_time') . "s\n";
echo "  memory_limit    : " . ini_get('memory_limit') . "\n";
echo "  upload_max_filesize: " . ini_get('upload_max_filesize') . "\n";
echo "\n";

// ── 8. Recent Laravel log (last 50 lines) ───────────────────────────────────
echo "── Recent Laravel Log ──\n";
$logFile = $logsDir . '/laravel.log';
if (file_exists($logFile)) {
    $lines = file($logFile);
    $last  = array_slice($lines, -50);
    echo implode('', $last);
} else {
    echo "  Log file not found at: $logFile\n";
    echo "  Checking if logs directory is writable...\n";
    if (is_writable($logsDir)) {
        // Try to force-write a test log entry
        $written = @file_put_contents($logFile, date('Y-m-d H:i:s') . " | diag test\n", FILE_APPEND);
        echo "  Manually created log: " . ($written !== false ? 'YES' : 'FAILED') . "\n";
    } else {
        echo "  storage/logs is NOT writable — that is why no logs are generated.\n";
    }
}
echo "\n";

echo "=== Done. DELETE this file now! ===\n";
