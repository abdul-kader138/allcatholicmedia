<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Flags the un-versioned /api/app/* surface as deprecated in favour of
 * /api/v1/app/*. The legacy routes keep working unchanged; this only adds
 * advisory headers so the mobile team can see what to migrate.
 */
class LegacyApiDeprecation
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $successor = preg_replace('#^(https?://[^/]+)/api/app/#', '$1/api/v1/app/', $request->url());

        $response->headers->set('Deprecation', 'true');
        $response->headers->set('Link', "<{$successor}>; rel=\"successor-version\"");

        // RFC 8594 — advertise the planned switch-off date so clients can plan.
        if ($sunset = config('app_mobile.legacy_api_sunset')) {
            $response->headers->set('Sunset', $sunset);
        }

        return $response;
    }
}
