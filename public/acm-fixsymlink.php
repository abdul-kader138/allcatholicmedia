<?php
/**
 * Fix public/storage symlink
 * Visit: /dev/public/acm-fixsymlink.php?key=acm2026fix
 * DELETE immediately after use.
 */
define('SECRET', 'acm2026fix');
if (($_GET['key'] ?? '') !== SECRET) { http_response_code(403); die('Forbidden.'); }

header('Content-Type: text/plain; charset=utf-8');

$publicDir   = __DIR__;
$baseDir     = dirname($publicDir);
$target      = $baseDir . '/storage/app/public';   // real storage folder
$link        = $publicDir . '/storage';             // where symlink should be

echo "Target : $target\n";
echo "Link   : $link\n\n";

// Check what currently exists at public/storage
if (is_link($link)) {
    echo "Already a symlink → " . readlink($link) . "\n";
    echo "Target accessible: " . (file_exists($link) ? 'YES' : 'NO (broken)') . "\n";
    exit;
}

if (is_dir($link)) {
    // List contents first
    $contents = array_diff(scandir($link), ['.', '..']);
    echo "public/storage is a real directory.\n";
    echo "Contents: " . (empty($contents) ? '(empty)' : implode(', ', $contents)) . "\n\n";

    if (!empty($contents)) {
        echo "Directory is NOT empty — cannot auto-delete.\n";
        echo "Manually delete public/storage via cPanel File Manager, then re-run this script.\n";
        exit;
    }

    // Safe to remove empty directory
    if (rmdir($link)) {
        echo "Removed empty directory: $link\n";
    } else {
        echo "FAILED to remove directory. Try deleting public/storage manually in File Manager.\n";
        exit;
    }
}

// Create the symlink
if (!is_dir($target)) {
    echo "ERROR: Target does not exist: $target\n";
    exit;
}

if (symlink($target, $link)) {
    echo "SUCCESS: Symlink created.\n";
    echo "public/storage → $target\n\n";

    // Verify it works
    $testFile = $target . '/symlink-test-' . time() . '.txt';
    file_put_contents($testFile, 'ok');
    echo "Symlink readable: " . (file_exists($link . '/' . basename($testFile)) ? 'YES' : 'NO') . "\n";
    @unlink($testFile);
} else {
    echo "FAILED to create symlink.\n";
    echo "Error: " . print_r(error_get_last(), true) . "\n";
    echo "\nAlternative: In cPanel File Manager, delete public/storage folder\n";
    echo "then right-click inside public/ → 'Create Symlink'\n";
    echo "Name: storage\n";
    echo "Target: /home/allcyowk/public_html/dev/storage/app/public\n";
}
