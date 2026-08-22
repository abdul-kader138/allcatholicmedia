<?php

namespace App\Services;

use Botble\Media\Facades\RvMedia;
use Botble\Media\Services\ThumbnailService;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageDownloader
{
    private const ALLOWED_EXTENSIONS = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
    private const TIMEOUT_SECONDS    = 15;
    private const MAX_SIZE_BYTES     = 10 * 1024 * 1024; // 10 MB

    private const MIME_TO_EXT = [
        'image/jpeg' => 'jpg',
        'image/jpg'  => 'jpg',
        'image/png'  => 'png',
        'image/webp' => 'webp',
        'image/gif'  => 'gif',
        'image/avif' => 'avif',
    ];

    public function download(string $url, string $subfolder = 'posts'): ?string
    {
        if (! filter_var($url, FILTER_VALIDATE_URL)) {
            return null;
        }

        try {
            $response = Http::withHeaders([
                'User-Agent' => 'AllCatholicMedia/1.0',
                'Accept' => 'image/avif,image/webp,image/apng,image/*,*/*;q=0.8',
                'Referer' => parse_url($url, PHP_URL_SCHEME) . '://' . parse_url($url, PHP_URL_HOST),
            ])
                ->timeout(self::TIMEOUT_SECONDS)
                ->withoutVerifying()   // cPanel often has outdated CA bundles causing SSL failures
                ->get($url);

            if (! $response->successful()) {
                Log::warning("ImageDownloader: HTTP {$response->status()} for {$url}");
                return null;
            }

            $body = $response->body();

            if (empty($body) || strlen($body) > self::MAX_SIZE_BYTES) {
                Log::warning('ImageDownloader: empty body or oversized image for ' . $url);
                return null;
            }

            $contentType = strtolower(trim(explode(';', $response->header('Content-Type') ?? '')[0]));
            $extension   = self::MIME_TO_EXT[$contentType]
                ?? $this->guessExtensionFromUrl($url)
                ?? 'jpg';

            $storagePath = "uploads/imported/{$subfolder}/img-" . now()->format('YmdHis') . '-' . Str::random(8) . ".{$extension}";

            $disk = Storage::disk('public');

            // Resolve the absolute path via the disk so FILESYSTEM_PUBLIC_ROOT is respected.
            // Then write with native PHP calls — Flysystem's put() silently fails on some
            // LiteSpeed/cPanel stacks even when the path is writable.
            $absolutePath = $disk->path($storagePath);
            $absDir       = dirname($absolutePath);

            if (! is_dir($absDir) && ! @mkdir($absDir, 0775, true)) {
                Log::error('ImageDownloader: could not create directory ' . $absDir);
                return null;
            }

            if (! is_writable($absDir)) {
                Log::error('ImageDownloader: directory is not writable ' . $absDir);
                return null;
            }

            $written = @file_put_contents($absolutePath, $body) !== false;

            if (! $written) {
                Log::error('ImageDownloader: file_put_contents failed for ' . $absolutePath . ' — ' . (error_get_last()['message'] ?? 'unknown error'));
                return null;
            }

            $this->generateThumbnails($absolutePath, $storagePath);

            return $storagePath;
        } catch (\Throwable $e) {
            Log::error('ImageDownloader: exception downloading ' . $url . ' — ' . $e->getMessage());
            return null;
        }
    }

    private function generateThumbnails(string $absolutePath, string $storagePath): void
    {
        try {
            /** @var ThumbnailService $thumbService */
            $thumbService = app(ThumbnailService::class);
            $destDir      = File::dirname($storagePath); // e.g. uploads/imported/posts
            $baseName     = File::name($storagePath);
            $ext          = File::extension($storagePath);

            foreach (RvMedia::getSizes() as $sizeString) {
                [$w, $h] = explode('x', $sizeString);

                $thumbService
                    ->setImage($absolutePath)
                    ->setSize((int) $w, (int) $h)
                    ->setDestinationPath($destDir)
                    ->setFileName("{$baseName}-{$sizeString}.{$ext}")
                    ->save('fit');
            }
        } catch (\Throwable) {
            // Thumbnail generation is best-effort — don't fail the whole import
        }
    }

    private function guessExtensionFromUrl(string $url): ?string
    {
        $path = parse_url($url, PHP_URL_PATH) ?? '';
        $ext  = strtolower(preg_replace('/[^a-z0-9]/', '', pathinfo($path, PATHINFO_EXTENSION)));

        return in_array($ext, self::ALLOWED_EXTENSIONS) ? $ext : null;
    }
}
