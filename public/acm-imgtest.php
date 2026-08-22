<?php
/**
 * AllCatholicMedia — Image Download & Storage Test
 * Visit: /dev/public/acm-imgtest.php?key=acm2026fix
 * DELETE immediately after use.
 */
define('SECRET', 'acm2026fix');
if (($_GET['key'] ?? '') !== SECRET) { http_response_code(403); die('Forbidden.'); }

header('Content-Type: text/plain; charset=utf-8');

$publicDir = __DIR__;                          // /home/.../public
$baseDir   = dirname($publicDir);              // /home/.../dev

echo "=== Image Storage Test ===\n\n";

// ── 1. Check env variable ────────────────────────────────────────────────────
echo "── ENV Check ──\n";

// Read .env manually
$envFile = $baseDir . '/.env';
$envVars = [];
if (file_exists($envFile)) {
    foreach (file($envFile) as $line) {
        $line = trim($line);
        if ($line && !str_starts_with($line, '#') && str_contains($line, '=')) {
            [$k, $v] = explode('=', $line, 2);
            $envVars[trim($k)] = trim($v, " \t\n\r\"'");
        }
    }
}

$fsRoot = $envVars['FILESYSTEM_PUBLIC_ROOT'] ?? '(not set)';
$appUrl = $envVars['APP_URL'] ?? '(not set)';
echo "  FILESYSTEM_PUBLIC_ROOT = $fsRoot\n";
echo "  APP_URL                = $appUrl\n\n";

// ── 2. Determine real disk root ──────────────────────────────────────────────
echo "── Disk Root Resolution ──\n";

// Check if bootstrap/cache/config.php exists (cached config overrides .env reading)
$cachedConfig = $baseDir . '/bootstrap/cache/config.php';
if (file_exists($cachedConfig)) {
    echo "  WARNING: bootstrap/cache/config.php EXISTS — cached config overrides .env!\n";
    echo "  This file must be deleted for FILESYSTEM_PUBLIC_ROOT to take effect.\n";
    // Try to read the disk root from the cached config
    $configContent = file_get_contents($cachedConfig);
    if (preg_match("/'root'\s*=>\s*'([^']+)'/", $configContent, $m)) {
        echo "  Cached disk root: " . $m[1] . "\n";
    }
} else {
    echo "  No cached config — .env will be used directly.\n";
}

// The actual path we expect images to land
$expectedRoot = ($fsRoot !== '(not set)') ? $fsRoot : ($baseDir . '/storage/app/public');
echo "  Expected disk root: $expectedRoot\n\n";

// ── 3. Write test in expected root ───────────────────────────────────────────
echo "── Write Test ──\n";
$testDir  = $expectedRoot . '/uploads/imported/posts';
$testFile = $testDir . '/write-test-' . time() . '.txt';

if (!is_dir($testDir)) {
    $made = @mkdir($testDir, 0775, true);
    echo "  Created directory: " . ($made ? 'YES' : 'FAILED') . " — $testDir\n";
} else {
    echo "  Directory exists: $testDir\n";
}

$written = @file_put_contents($testFile, 'storage-test');
echo "  Write to disk root: " . ($written !== false ? 'OK' : 'FAILED') . "\n";

if ($written !== false) {
    // Check if accessible via web
    $relativePath = str_replace($publicDir . '/', '', $testFile);
    $webUrl       = rtrim($appUrl, '/') . '/' . $relativePath;
    echo "  Web URL would be: $webUrl\n";

    // Verify it's inside public/ (accessible via web)
    if (str_starts_with($testFile, $publicDir . '/')) {
        echo "  File is web-accessible: YES (inside public/)\n";
    } else {
        echo "  File is web-accessible: NO — path is outside public/\n";
        echo "  This means images will save but won't be visible in browser!\n";
    }
    @unlink($testFile);
}

// ── 4. Download a real image ─────────────────────────────────────────────────
echo "\n── Real Image Download Test ──\n";
$testImageUrl = 'https://www.catholicnewsagency.com/images/size/tiny/Pope-Francis-at-Wednesday-General-Audience.jpg';
// fallback small image
$fallbackUrl = 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/47/PNG_transparency_demonstration_1.png/280px-PNG_transparency_demonstration_1.png';

foreach ([$testImageUrl, $fallbackUrl] as $imageUrl) {
    $ch = curl_init($imageUrl);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 15,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_USERAGENT      => 'AllCatholicMedia/1.0',
    ]);
    $body   = curl_exec($ch);
    $info   = curl_getinfo($ch);
    $error  = curl_error($ch);
    curl_close($ch);

    echo "  URL: $imageUrl\n";
    echo "  HTTP: {$info['http_code']}  size: " . strlen($body ?: '') . " bytes  error: " . ($error ?: 'none') . "\n";

    if ($info['http_code'] === 200 && strlen($body) > 0) {
        // Try saving it
        $saveDir  = $expectedRoot . '/uploads/imported/posts';
        @mkdir($saveDir, 0775, true);
        $savePath = $saveDir . '/img-test-' . time() . '.jpg';
        $saved    = @file_put_contents($savePath, $body);

        echo "  Saved to disk: " . ($saved !== false ? 'YES (' . $saved . ' bytes)' : 'FAILED') . "\n";
        echo "  Save path: $savePath\n";

        if ($saved !== false) {
            // Build what the web URL would look like
            if (str_starts_with($savePath, $publicDir . '/')) {
                $rel    = substr($savePath, strlen($publicDir) + 1);
                $webUrl = rtrim($appUrl, '/') . '/' . $rel;
                echo "  Web URL: $webUrl\n";
                echo "  -> Open that URL in browser to verify image appears\n";
            } else {
                echo "  File saved OUTSIDE public/ — NOT web accessible!\n";
                echo "  Fix: set FILESYSTEM_PUBLIC_ROOT=$publicDir/storage in .env\n";
            }
            // Leave the file so user can verify via browser, auto-cleanup after 60 sec not possible
        }
        break;
    }
}

// ── 5. Check bootstrap/cache files ──────────────────────────────────────────
echo "\n── Bootstrap Cache Files ──\n";
$cacheDir = $baseDir . '/bootstrap/cache';
$files    = glob($cacheDir . '/*.php');
if (empty($files)) {
    echo "  No cached .php files — good.\n";
} else {
    foreach ($files as $f) {
        echo "  EXISTS: " . basename($f) . " (" . round(filesize($f)/1024, 1) . " KB)\n";
    }
    echo "\n  These need to be DELETED for config changes to take effect.\n";
    echo "  Attempting to delete them now...\n";
    $deleted = 0;
    foreach ($files as $f) {
        if (basename($f) !== '.gitignore') {
            if (@unlink($f)) {
                echo "    Deleted: " . basename($f) . "\n";
                $deleted++;
            } else {
                echo "    FAILED to delete: " . basename($f) . "\n";
            }
        }
    }
    echo "  Deleted $deleted files.\n";
}

echo "\n=== Done. DELETE this file now! ===\n";
