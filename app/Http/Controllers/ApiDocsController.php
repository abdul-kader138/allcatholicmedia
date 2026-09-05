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
                ['name' => 'Auth', 'description' => 'Member registration, login, password reset (v1)'],
                ['name' => 'Account', 'description' => 'Authenticated member profile, activity, donations (v1)'],
                ['name' => 'Content', 'description' => 'Channels, watch, listen, read, saints, live, search, pages (v1)'],
                ['name' => 'Legacy', 'description' => 'Deprecated un-versioned endpoints'],
            ],
            'paths' => array_merge($this->authPaths(), $this->accountPaths(), $this->v1ContentPaths(), $this->legacyPaths()),
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
            '/api/v1/auth/forgot-password' => ['post' => [
                'tags' => ['Auth'],
                'summary' => 'Request a password reset link',
                'requestBody' => $this->jsonBody('ForgotPasswordInput', ['email' => 'maria@example.com']),
                'responses' => ['200' => $this->ref('MessageEnvelope', 'Always 200 (no account enumeration)')],
            ]],
            '/api/v1/auth/reset-password' => ['post' => [
                'tags' => ['Auth'],
                'summary' => 'Reset password with the emailed token',
                'requestBody' => $this->jsonBody('ResetPasswordInput', [
                    'token' => '<from email>', 'email' => 'maria@example.com',
                    'password' => 'newsecret6789', 'password_confirmation' => 'newsecret6789',
                ]),
                'responses' => [
                    '200' => $this->ref('MessageEnvelope', 'Password reset'),
                    '422' => $this->ref('Error', 'Invalid or expired token'),
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
    private function accountPaths(): array
    {
        $sec = [['bearerAuth' => []]];
        $unauth = fn () => $this->ref('Error', 'Unauthenticated');
        $paged = fn (string $d) => $this->ref('Envelope', $d);

        return [
            '/api/v1/account' => [
                'get' => ['tags' => ['Account'], 'summary' => 'Get the signed-in member', 'security' => $sec,
                    'responses' => ['200' => $this->ref('MemberEnvelope', 'Member'), '401' => $unauth()]],
                'put' => ['tags' => ['Account'], 'summary' => 'Update profile', 'security' => $sec,
                    'requestBody' => $this->jsonBody('ProfileUpdateInput', [
                        'first_name' => 'Maria', 'last_name' => 'Gonzalez', 'phone' => '+1 555 010 2030',
                        'dob' => '1990-05-01', 'gender' => 'female', 'description' => 'Parishioner at St. Mary.',
                    ]),
                    'responses' => ['200' => $this->ref('MemberEnvelope', 'Updated'), '401' => $unauth(), '422' => $this->ref('Error', 'Validation failed')]],
                'delete' => ['tags' => ['Account'], 'summary' => 'Delete account', 'security' => $sec,
                    'requestBody' => $this->jsonBody('DeleteAccountInput', ['confirm' => true]),
                    'responses' => ['200' => $this->ref('MessageEnvelope', 'Deleted'), '401' => $unauth()]],
            ],
            '/api/v1/account/avatar' => ['post' => [
                'tags' => ['Account'], 'summary' => 'Upload avatar (multipart)', 'security' => $sec,
                'requestBody' => ['required' => true, 'content' => ['multipart/form-data' => ['schema' => [
                    'type' => 'object', 'properties' => ['avatar' => ['type' => 'string', 'format' => 'binary']],
                ]]]],
                'responses' => ['200' => $this->ref('MemberEnvelope', 'Updated'), '401' => $unauth(), '422' => $this->ref('Error', 'Bad file')],
            ]],
            '/api/v1/account/activities' => ['get' => [
                'tags' => ['Account'], 'summary' => 'Member activity log (paginated)', 'security' => $sec,
                'parameters' => [$this->queryParam('page', 'integer'), $this->queryParam('per_page', 'integer')],
                'responses' => ['200' => $paged('Activities'), '401' => $unauth()],
            ]],
            '/api/v1/account/donations' => ['get' => [
                'tags' => ['Account'], 'summary' => 'Member donation history (paginated)', 'security' => $sec,
                'parameters' => [$this->queryParam('page', 'integer'), $this->queryParam('per_page', 'integer')],
                'responses' => ['200' => $paged('Donations'), '401' => $unauth()],
            ]],
            '/api/v1/account/prayer-requests' => ['get' => [
                'tags' => ['Account'], 'summary' => 'Prayer requests submitted with this email (paginated)', 'security' => $sec,
                'parameters' => [$this->queryParam('page', 'integer'), $this->queryParam('per_page', 'integer')],
                'responses' => ['200' => $paged('Prayer requests'), '401' => $unauth()],
            ]],
        ];
    }

    /** @return array<string, mixed> */
    private function v1ContentPaths(): array
    {
        $ok = fn (string $desc) => $this->ref('Envelope', $desc);

        // Shared list controls on every paginated list endpoint.
        $list = [
            $this->queryParam('page', 'integer'),
            $this->queryParam('per_page', 'integer'),
            $this->queryParam('q', 'string'),
        ];

        return [
            '/api/v1/app/home' => ['get' => [
                'tags' => ['Content'], 'summary' => 'Home sections with counts',
                'responses' => ['200' => $ok('Home sections')],
            ]],
            '/api/v1/app/channels' => ['get' => [
                'tags' => ['Content'], 'summary' => 'List active channels (paginated, searchable)',
                'parameters' => array_merge($list, [$this->queryParam('sort', 'string', ['sort', 'videos'])]),
                'responses' => ['200' => $ok('Channels')],
            ]],
            '/api/v1/app/channels/{slug}' => ['get' => [
                'tags' => ['Content'], 'summary' => 'Channel detail + paginated videos',
                'parameters' => array_merge([$this->pathParam('slug'), $this->queryParam('live', 'boolean')], $list),
                'responses' => ['200' => $ok('Channel detail'), '404' => $this->ref('Error', 'Not found')],
            ]],
            '/api/v1/app/videos' => ['get' => [
                'tags' => ['Content'], 'summary' => 'Watch — cross-channel video feed / search',
                'parameters' => array_merge($list, [
                    $this->queryParam('channel', 'string'),
                    $this->queryParam('live', 'boolean'),
                    $this->queryParam('sort', 'string', ['recent', 'views']),
                ]),
                'responses' => ['200' => $ok('Videos')],
            ]],
            '/api/v1/app/videos/{id}' => ['get' => [
                'tags' => ['Content'], 'summary' => 'Video detail (with channel)',
                'parameters' => [['name' => 'id', 'in' => 'path', 'required' => true, 'schema' => ['type' => 'integer']]],
                'responses' => ['200' => $ok('Video'), '404' => $this->ref('Error', 'Not found')],
            ]],
            '/api/v1/app/listen' => ['get' => [
                'tags' => ['Content'], 'summary' => 'List podcast shows (paginated, searchable)',
                'parameters' => array_merge($list, [
                    $this->queryParam('category', 'string'),
                    $this->queryParam('sort', 'string', ['name', 'episodes']),
                ]),
                'responses' => ['200' => $ok('Shows')],
            ]],
            '/api/v1/app/listen/{slug}' => ['get' => [
                'tags' => ['Content'], 'summary' => 'Show detail + paginated episodes',
                'parameters' => array_merge([$this->pathParam('slug')], $list),
                'responses' => ['200' => $ok('Show detail'), '404' => $this->ref('Error', 'Not found')],
            ]],
            '/api/v1/app/episodes/{id}' => ['get' => [
                'tags' => ['Content'], 'summary' => 'Episode detail (with show)',
                'parameters' => [['name' => 'id', 'in' => 'path', 'required' => true, 'schema' => ['type' => 'integer']]],
                'responses' => ['200' => $ok('Episode'), '404' => $this->ref('Error', 'Not found')],
            ]],
            '/api/v1/app/live-now' => ['get' => [
                'tags' => ['Content'], 'summary' => 'Live + upcoming streams',
                'parameters' => [$this->queryParam('status', 'string', ['live', 'upcoming'])],
                'responses' => ['200' => $ok('Live streams')],
            ]],
            '/api/v1/app/read' => ['get' => [
                'tags' => ['Content'], 'summary' => 'List articles (paginated, searchable)',
                'parameters' => array_merge($list, [
                    $this->queryParam('category', 'integer'),
                    $this->queryParam('sort', 'string', ['latest', 'popular']),
                ]),
                'responses' => ['200' => $ok('Articles')],
            ]],
            '/api/v1/app/read/{slug}' => ['get' => [
                'tags' => ['Content'], 'summary' => 'Article detail (full content)',
                'parameters' => [$this->pathParam('slug')],
                'responses' => ['200' => $ok('Article'), '404' => $this->ref('Error', 'Not found')],
            ]],
            '/api/v1/app/saints' => ['get' => [
                'tags' => ['Content'], 'summary' => 'List saints (paginated, searchable)',
                'parameters' => array_merge($list, [$this->queryParam('letter', 'string')]),
                'responses' => ['200' => $ok('Saints')],
            ]],
            '/api/v1/app/saints/{slug}' => ['get' => [
                'tags' => ['Content'], 'summary' => 'Saint detail (full content)',
                'parameters' => [$this->pathParam('slug')],
                'responses' => ['200' => $ok('Saint'), '404' => $this->ref('Error', 'Not found')],
            ]],
            '/api/v1/app/search' => ['get' => [
                'tags' => ['Content'], 'summary' => 'Grouped search across articles, saints, shows, channels',
                'parameters' => [$this->queryParam('q', 'string')],
                'responses' => ['200' => $ok('Grouped results'), '422' => $this->ref('Error', 'Query too short')],
            ]],
            '/api/v1/app/pages/{slug}' => ['get' => [
                'tags' => ['Content'], 'summary' => 'Static CMS page (about, editorial-policy, …)',
                'parameters' => [$this->pathParam('slug')],
                'responses' => ['200' => $ok('Page'), '404' => $this->ref('Error', 'Not found')],
            ]],
            '/api/v1/app/newsletter/subscribe' => ['post' => [
                'tags' => ['Content'], 'summary' => 'Subscribe an email to the newsletter',
                'requestBody' => $this->jsonBody('NewsletterSubscribeInput', ['email' => 'maria@example.com', 'name' => 'Maria']),
                'responses' => ['201' => $this->ref('MessageEnvelope', 'Subscribed'), '422' => $this->ref('Error', 'Validation failed')],
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
            'ForgotPasswordInput' => [
                'type' => 'object', 'required' => ['email'],
                'properties' => ['email' => ['type' => 'string', 'format' => 'email']],
            ],
            'ResetPasswordInput' => [
                'type' => 'object', 'required' => ['token', 'email', 'password', 'password_confirmation'],
                'properties' => [
                    'token' => ['type' => 'string', 'description' => 'From the password-reset email'],
                    'email' => ['type' => 'string', 'format' => 'email'],
                    'password' => ['type' => 'string', 'format' => 'password', 'minLength' => 8],
                    'password_confirmation' => ['type' => 'string', 'format' => 'password'],
                ],
            ],
            'ProfileUpdateInput' => [
                'type' => 'object',
                'properties' => [
                    'first_name' => ['type' => 'string', 'maxLength' => 120],
                    'last_name' => ['type' => 'string', 'maxLength' => 120],
                    'phone' => ['type' => 'string', 'nullable' => true, 'maxLength' => 40],
                    'dob' => ['type' => 'string', 'format' => 'date', 'nullable' => true],
                    'gender' => ['type' => 'string', 'nullable' => true, 'maxLength' => 20],
                    'description' => ['type' => 'string', 'nullable' => true, 'maxLength' => 2000],
                ],
            ],
            'DeleteAccountInput' => [
                'type' => 'object', 'required' => ['confirm'],
                'properties' => ['confirm' => ['type' => 'boolean', 'description' => 'Must be true']],
            ],
            'NewsletterSubscribeInput' => [
                'type' => 'object', 'required' => ['email'],
                'properties' => [
                    'email' => ['type' => 'string', 'format' => 'email', 'maxLength' => 120],
                    'name' => ['type' => 'string', 'nullable' => true, 'maxLength' => 120],
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
