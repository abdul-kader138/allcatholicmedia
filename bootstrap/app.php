<?php

use App\Providers\AppServiceProvider;
use App\Support\Api\ApiResponse;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withProviders([
        AppServiceProvider::class,
    ])
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->append(\App\Http\Middleware\SecurityHeaders::class);

        // RFC 8058 one-click unsubscribe: mailbox providers POST here on the
        // subscriber's behalf and cannot carry a session CSRF token.
        $middleware->validateCsrfTokens(except: [
            'newsletter/campaign/unsubscribe/*',
            '*/newsletter/campaign/unsubscribe/*',
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // Every /api/* failure comes back as the standard JSON error envelope.
        $exceptions->shouldRenderJsonWhen(
            fn (Request $request, \Throwable $e) => $request->is('api/*') || $request->expectsJson()
        );

        $exceptions->render(function (\Throwable $e, Request $request) {
            if (! $request->is('api/*')) {
                return null;
            }

            if ($e instanceof ValidationException) {
                return ApiResponse::error('The given data was invalid.', 422, 'validation_failed', $e->errors());
            }

            if ($e instanceof AuthenticationException) {
                return ApiResponse::error('Unauthenticated.', 401, 'unauthenticated');
            }

            if ($e instanceof AuthorizationException) {
                return ApiResponse::error($e->getMessage() ?: 'Forbidden.', 403, 'forbidden');
            }

            if ($e instanceof ModelNotFoundException || $e instanceof NotFoundHttpException) {
                return ApiResponse::error('Resource not found.', 404, 'not_found');
            }

            if ($e instanceof HttpExceptionInterface) {
                $status = $e->getStatusCode();

                return ApiResponse::error(
                    $e->getMessage() ?: ApiResponse::codeForStatus($status),
                    $status,
                    ApiResponse::codeForStatus($status)
                );
            }

            return ApiResponse::error(
                config('app.debug') ? $e->getMessage() : 'Something went wrong.',
                500,
                'server_error'
            );
        });
    })->create();
