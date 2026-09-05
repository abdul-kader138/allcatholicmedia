<?php

namespace App\Support\Api;

use Botble\Media\Facades\RvMedia;

/**
 * Normalises a stored media path into an absolute URL the mobile app can load
 * directly. External URLs (e.g. YouTube thumbnails) are returned untouched;
 * null / empty yields null so the client can decide on a placeholder.
 */
class Media
{
    public static function url(?string $path, ?string $size = null): ?string
    {
        $path = trim((string) $path);

        if ($path === '') {
            return null;
        }

        if (\Illuminate\Support\Str::startsWith($path, ['http://', 'https://', '//'])) {
            return $path;
        }

        return RvMedia::getImageUrl($path, $size, false);
    }
}
