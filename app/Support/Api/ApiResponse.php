<?php

namespace App\Support\Api;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Consistent JSON envelope for the mobile API (v1).
 *
 *   success : { "data": <payload>, "meta": { ... }? }
 *   error   : { "error": { "code": "...", "message": "...", "details": { ... }? } }
 */
class ApiResponse
{
    public static function ok(mixed $data, array $meta = [], int $status = 200): JsonResponse
    {
        $body = ['data' => $data];

        if ($meta) {
            $body['meta'] = $meta;
        }

        return response()->json($body, $status);
    }

    /**
     * @param  iterable<int, mixed>  $items  already-resolved resource array
     */
    public static function paginated(iterable $items, LengthAwarePaginator $paginator, array $extraMeta = []): JsonResponse
    {
        return static::ok($items, array_merge([
            'pagination' => [
                'current_page' => $paginator->currentPage(),
                'last_page' => $paginator->lastPage(),
                'per_page' => $paginator->perPage(),
                'total' => $paginator->total(),
                'has_more' => $paginator->hasMorePages(),
            ],
        ], $extraMeta));
    }

    public static function error(string $message, int $status = 400, ?string $code = null, array $details = []): JsonResponse
    {
        $error = [
            'code' => $code ?: static::codeForStatus($status),
            'message' => $message,
        ];

        if ($details) {
            $error['details'] = $details;
        }

        return response()->json(['error' => $error], $status);
    }

    /**
     * Attach validator-friendly cache headers and honour conditional requests.
     * Returns a 304 (empty body) when the client's ETag still matches.
     */
    public static function cache(JsonResponse $response, Request $request, int $maxAge): JsonResponse
    {
        $response->headers->set('Cache-Control', "public, max-age={$maxAge}");
        $response->setEtag(sha1($request->fullUrl() . '|' . (string) $response->getContent()), true);
        $response->isNotModified($request); // flips the response to 304 in place when it matches

        return $response;
    }

    public static function codeForStatus(int $status): string
    {
        return match ($status) {
            400 => 'bad_request',
            401 => 'unauthenticated',
            403 => 'forbidden',
            404 => 'not_found',
            405 => 'method_not_allowed',
            422 => 'validation_failed',
            429 => 'too_many_requests',
            500 => 'server_error',
            503 => 'service_unavailable',
            default => 'error',
        };
    }
}
