<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
        $response->headers->set('Permissions-Policy', 'camera=(), microphone=(), geolocation=()');

        if ($request->isSecure()) {
            $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');
        }

        // Existing theme and provider embeds still require inline assets. Keep the
        // policy configurable while allowing production to move toward a nonce-based CSP.
        $contentSecurityPolicy = config('security.content_security_policy');
        if ($contentSecurityPolicy) {
            $response->headers->set(
                config('security.content_security_policy_report_only', true)
                    ? 'Content-Security-Policy-Report-Only'
                    : 'Content-Security-Policy',
                $contentSecurityPolicy
            );
        }

        return $response;
    }
}
