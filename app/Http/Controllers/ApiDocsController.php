<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class ApiDocsController extends Controller
{
    public function index(): View
    {
        return view('swagger');
    }

    public function openApi(): JsonResponse
    {
        return response()->json([
            'openapi' => '3.0.3',
            'info' => [
                'title' => 'All Catholic Media App API',
                'version' => '2.0.0',
                'description' => implode("\n\n", [
                    '**v1** (`/api/v1/...`) is the current surface for the mobile app: standard `{ data, meta }` / `{ error }` envelope, absolute media URLs, `updated_at` on every resource, ETag revalidation, and member authentication via Sanctum bearer tokens.',
                    'The un-versioned `/api/app/...` endpoints are **deprecated** but still served for shipped app builds. They carry `Deprecation: true` and a `Link: <successor>` header.',
                ]),
            ],
            'servers' => [
                ['url' => url('/'), 'description' => 'Current environment'],
            ],
            'tags' => [
                ['name' => 'Auth', 'description' => 'Member registration, login and account (v1)'],
                ['name' => 'Content', 'description' => 'Channels, live, listen, read, saints, donate (v1)'],
                ['name' => 'Legacy', 'description' => 'Deprecated un-versioned endpoints'],
            ],
            'paths' => array_merge($this->authPaths(), $this->v1ContentPaths(), $this->legacyPaths()),
            'components' => [
                'securitySchemes' => [
                    'bearerAuth' => ['type' => 'http', 'scheme' => 'bearer', 'bearerFormat' => 'Sanctum personal access token'],
                ],
                'schemas' => $this->schemas(),
            ],
        ]);
    }

    /** @return array<string, mixed> */
    private function authPaths(): array
    {
        return [
            '/api/v1/auth/register' => ['post' => [
                'tags' => ['Auth'],
                'summary' => 'Register a member',
                'description' => 'Creates a member account. Returns a bearer token unless email verification is enabled, in which case a confirmation email is sent and no token is issued until the address is verified.',
                'requestBody' => $this->jsonBody('RegisterInput', [
                    'first_name' => 'Maria', 'last_name' => 'Gonzalez',
                    'email' => 'maria@example.com', 'phone' => '+1 555 010 2030',
                    'password' => 'secret12345', 'password_confirmation' => 'secret12345',
                    'device_name' => 'iPhone 15',
                ]),
                'responses' => [
                    '201' => $this->ref('AuthTokenResponse', 'Account created'),
                    '404' => $this->ref('Error', 'Registration disabled'),
                    '422' => $this->ref('Error', 'Validation failed'),
                    '429' => $this->ref('Error', 'Too many attempts'),
                ],
            ]],
            '/api/v1/auth/login' => ['post' => [
                'tags' => ['Auth'],
                'summary' => 'Log in',
                'requestBody' => $this->jsonBody('LoginInput', [
                    'email' => 'maria@example.com', 'password' => 'secret12345', 'device_name' => 'iPhone 15',
                ]),
                'responses' => [
                    '200' => $this->ref('AuthTokenResponse', 'Authenticated'),
                    '403' => $this->ref('Error', 'Email not verified (code: email_not_verified)'),
                    '422' => $this->ref('Error', 'Invalid credentials'),
                    '429' => $this->ref('Error', 'Too many attempts'),
                ],
            ]],
            '/api/v1/auth/me' => ['get' => [
                'tags' => ['Auth'],
                'summary' => 'Current member',
                'security' => [['bearerAuth' => []]],
                'responses' => [
                    '200' => $this->ref('MemberEnvelope', 'Current member'),
                    '401' => $this->ref('Error', 'Unauthenticated'),
                ],
            ]],
            '/api/v1/auth/logout' => ['post' => [
                'tags' => ['Auth'],
                'summary' => 'Revoke the current token',
                'security' => [['bearerAuth' => []]],
                'responses' => [
                    '200' => $this->ref('MessageEnvelope', 'Signed out'),
                    '401' => $this->ref('Error', 'Unauthenticated'),
                ],
            ]],
            '/api/v1/auth/change-password' => ['post' => [
                'tags' => ['Auth'],
                'summary' => 'Change password',
                'security' => [['bearerAuth' => []]],
                'requestBody' => $this->jsonBody('ChangePasswordInput', [
                    'current_password' => 'secret12345',
                    'password' => 'newsecret6789', 'password_confirmation' => 'newsecret6789',
                    'logout_other_devices' => true,
                ]),
                'responses' => [
                    '200' => $this->ref('MessageEnvelope', 'Password updated'),
                    '401' => $this->ref('Error', 'Unauthenticated'),
                    '422' => $this->ref('Error', 'Wrong current password or invalid new password'),
                ],
            ]],
        ];
    }

    /** @return array<string, mixed> */
    private function v1ContentPaths(): array
    {
        $ok = fn (string $desc) => $this->ref('Envelope', $desc);

        return [
            '/api/v1/app/home' => ['get' => [
                'tags' => ['Content'], 'summary' => 'Home sections with counts',
                'responses' => ['200' => $ok('Home sections')],
            ]],
            '/api/v1/app/channels' => ['get' => [
                'tags' => ['Content'], 'summary' => 'List active channels (with latest video)',
                'responses' => ['200' => $ok('Channels')],
            ]],
            '/api/v1/app/channels/{slug}' => ['get' => [
                'tags' => ['Content'], 'summary' => 'Channel detail + paginated videos',
                'parameters' => [$this->pathParam('slug'), $this->queryParam('page', 'integer')],
                'responses' => ['200' => $ok('Channel detail'), '404' => $this->ref('Error', 'Not found')],
            ]],
            '/api/v1/app/listen' => ['get' => [
                'tags' => ['Content'], 'summary' => 'List podcast shows',
                'parameters' => [
                    $this->queryParam('category', 'string'),
                    $this->queryParam('sort', 'string', ['name', 'episodes']),
                ],
                'responses' => ['200' => $ok('Shows')],
            ]],
            '/api/v1/app/listen/{slug}' => ['get' => [
                'tags' => ['Content'], 'summary' => 'Show detail + paginated episodes',
                'parameters' => [$this->pathParam('slug'), $this->queryParam('page', 'integer')],
                'responses' => ['200' => $ok('Show detail'), '404' => $this->ref('Error', 'Not found')],
            ]],
            '/api/v1/app/live-now' => ['get' => [
                'tags' => ['Content'], 'summary' => 'Live + upcoming streams',
                'responses' => ['200' => $ok('Live streams')],
            ]],
            '/api/v1/app/read' => ['get' => [
                'tags' => ['Content'], 'summary' => 'List articles',
                'parameters' => [
                    $this->queryParam('category', 'integer'),
                    $this->queryParam('q', 'string'),
                    $this->queryParam('sort', 'string', ['latest', 'popular']),
                    $this->queryParam('page', 'integer'),
                ],
                'responses' => ['200' => $ok('Articles')],
            ]],
            '/api/v1/app/saints' => ['get' => [
                'tags' => ['Content'], 'summary' => 'List saints',
                'parameters' => [
                    $this->queryParam('q', 'string'),
                    $this->queryParam('letter', 'string'),
                    $this->queryParam('page', 'integer'),
                ],
                'responses' => ['200' => $ok('Saints')],
            ]],
            '/api/v1/app/donate/config' => ['get' => [
                'tags' => ['Content'], 'summary' => 'Donation configuration',
                'responses' => ['200' => $ok('Donate config')],
            ]],
            '/api/v1/app/prayer-requests' => ['post' => [
                'tags' => ['Content'], 'summary' => 'Submit a prayer request',
                'requestBody' => $this->jsonBody('PrayerRequestInput', [
                    'full_name' => 'John Doe', 'email' => 'john@example.com',
                    'phone' => '+1 555 123 4567', 'location' => 'Berlin, Germany',
                    'intention' => 'Please pray for healing and peace for my family.',
                    'is_private' => true, 'allow_follow_up' => false,
                ]),
                'responses' => [
                    '201' => $this->ref('Envelope', 'Created'),
                    '422' => $this->ref('Error', 'Validation failed'),
                    '429' => $this->ref('Error', 'Too many submissions'),
                ],
            ]],
        ];
    }

    /**
     * Legacy un-versioned surface — same operations, marked deprecated.
     *
     * @return array<string, mixed>
     */
    private function legacyPaths(): array
    {
        $legacy = [
            '/api/app/home' => 'get', '/api/app/channels' => 'get', '/api/app/channels/{slug}' => 'get',
            '/api/app/listen' => 'get', '/api/app/listen/{slug}' => 'get', '/api/app/live-now' => 'get',
            '/api/app/read' => 'get', '/api/app/saints' => 'get', '/api/app/donate/config' => 'get',
            '/api/app/prayer-requests' => 'post',
        ];

        $paths = [];

        foreach ($legacy as $path => $method) {
            $op = [
                'tags' => ['Legacy'],
                'deprecated' => true,
                'summary' => 'Deprecated — use ' . str_replace('/api/app/', '/api/v1/app/', $path),
                'responses' => ['200' => ['description' => 'OK (legacy response shape)']],
            ];

            if (str_contains($path, '{slug}')) {
                $op['parameters'] = [$this->pathParam('slug')];
                $op['responses']['404'] = ['description' => 'Not found'];
            }

            if ($method === 'post') {
                $op['requestBody'] = $this->jsonBody('PrayerRequestInput');
                $op['responses'] = [
                    '201' => ['description' => 'Created'],
                    '422' => ['description' => 'Validation failed'],
                ];
            }

            $paths[$path] = [$method => $op];
        }

        return $paths;
    }

    /** @return array<string, mixed> */
    private function schemas(): array
    {
        return [
            'Envelope' => [
                'type' => 'object',
                'properties' => [
                    'data' => ['description' => 'Endpoint-specific payload'],
                    'meta' => [
                        'type' => 'object',
                        'properties' => [
                            'pagination' => [
                                'type' => 'object',
                                'properties' => [
                                    'current_page' => ['type' => 'integer'],
                                    'last_page' => ['type' => 'integer'],
                                    'per_page' => ['type' => 'integer'],
                                    'total' => ['type' => 'integer'],
                                    'has_more' => ['type' => 'boolean'],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'Error' => [
                'type' => 'object',
                'properties' => [
                    'error' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => ['type' => 'string', 'example' => 'validation_failed'],
                            'message' => ['type' => 'string'],
                            'details' => ['type' => 'object', 'nullable' => true, 'description' => 'Field errors for 422'],
                        ],
                    ],
                ],
            ],
            'Member' => [
                'type' => 'object',
                'properties' => [
                    'id' => ['type' => 'integer'],
                    'first_name' => ['type' => 'string'],
                    'last_name' => ['type' => 'string'],
                    'name' => ['type' => 'string'],
                    'email' => ['type' => 'string', 'format' => 'email'],
                    'phone' => ['type' => 'string', 'nullable' => true],
                    'avatar' => ['type' => 'string'],
                    'avatar_thumb' => ['type' => 'string'],
                    'email_verified' => ['type' => 'boolean'],
                    'created_at' => ['type' => 'string', 'format' => 'date-time'],
                    'updated_at' => ['type' => 'string', 'format' => 'date-time'],
                ],
            ],
            'MemberEnvelope' => [
                'type' => 'object',
                'properties' => ['data' => ['type' => 'object', 'properties' => ['member' => ['$ref' => '#/components/schemas/Member']]]],
            ],
            'MessageEnvelope' => [
                'type' => 'object',
                'properties' => ['data' => ['type' => 'object', 'properties' => ['message' => ['type' => 'string']]]],
            ],
            'AuthTokenResponse' => [
                'type' => 'object',
                'properties' => [
                    'data' => [
                        'type' => 'object',
                        'properties' => [
                            'token' => ['type' => 'string', 'description' => 'Send as Authorization: Bearer <token>'],
                            'token_type' => ['type' => 'string', 'example' => 'Bearer'],
                            'member' => ['$ref' => '#/components/schemas/Member'],
                            'requires_verification' => ['type' => 'boolean', 'description' => 'Present instead of token when email verification is pending'],
                        ],
                    ],
                ],
            ],
            'RegisterInput' => [
                'type' => 'object',
                'required' => ['first_name', 'last_name', 'email', 'password', 'password_confirmation'],
                'properties' => [
                    'first_name' => ['type' => 'string', 'maxLength' => 120],
                    'last_name' => ['type' => 'string', 'maxLength' => 120],
                    'email' => ['type' => 'string', 'format' => 'email', 'maxLength' => 150],
                    'phone' => ['type' => 'string', 'nullable' => true, 'maxLength' => 40],
                    'password' => ['type' => 'string', 'format' => 'password', 'minLength' => 8],
                    'password_confirmation' => ['type' => 'string', 'format' => 'password'],
                    'device_name' => ['type' => 'string', 'nullable' => true, 'maxLength' => 120],
                ],
            ],
            'LoginInput' => [
                'type' => 'object',
                'required' => ['email', 'password'],
                'properties' => [
                    'email' => ['type' => 'string', 'format' => 'email'],
                    'password' => ['type' => 'string', 'format' => 'password'],
                    'device_name' => ['type' => 'string', 'nullable' => true, 'maxLength' => 120],
                ],
            ],
            'ChangePasswordInput' => [
                'type' => 'object',
                'required' => ['current_password', 'password', 'password_confirmation'],
                'properties' => [
                    'current_password' => ['type' => 'string', 'format' => 'password'],
                    'password' => ['type' => 'string', 'format' => 'password', 'minLength' => 8],
                    'password_confirmation' => ['type' => 'string', 'format' => 'password'],
                    'logout_other_devices' => ['type' => 'boolean', 'default' => false],
                ],
            ],
            'PrayerRequestInput' => [
                'type' => 'object',
                'required' => ['full_name', 'email', 'intention'],
                'properties' => [
                    'full_name' => ['type' => 'string', 'maxLength' => 120],
                    'email' => ['type' => 'string', 'format' => 'email', 'maxLength' => 150],
                    'phone' => ['type' => 'string', 'nullable' => true, 'maxLength' => 40],
                    'location' => ['type' => 'string', 'nullable' => true, 'maxLength' => 120],
                    'intention' => ['type' => 'string', 'maxLength' => 5000],
                    'is_private' => ['type' => 'boolean', 'default' => true],
                    'allow_follow_up' => ['type' => 'boolean', 'default' => false],
                ],
            ],
        ];
    }

    /** @param array<string, mixed> $example */
    private function jsonBody(string $schema, array $example = []): array
    {
        $content = ['schema' => ['$ref' => "#/components/schemas/{$schema}"]];

        if ($example) {
            $content['example'] = $example;
        }

        return ['required' => true, 'content' => ['application/json' => $content]];
    }

    private function ref(string $schema, string $description): array
    {
        return [
            'description' => $description,
            'content' => ['application/json' => ['schema' => ['$ref' => "#/components/schemas/{$schema}"]]],
        ];
    }

    private function pathParam(string $name): array
    {
        return ['name' => $name, 'in' => 'path', 'required' => true, 'schema' => ['type' => 'string']];
    }

    /** @param array<int, string> $enum */
    private function queryParam(string $name, string $type, array $enum = []): array
    {
        $schema = ['type' => $type];

        if ($enum) {
            $schema['enum'] = $enum;
        }

        return ['name' => $name, 'in' => 'query', 'required' => false, 'schema' => $schema];
    }
}
