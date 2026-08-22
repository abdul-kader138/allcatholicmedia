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
                'version' => '1.0.0',
                'description' => 'Public API for channels, live streams, listen, read, saints, donate config, and prayer requests.',
            ],
            'servers' => [
                [
                    'url' => url('/'),
                    'description' => 'Current environment',
                ],
            ],
            'paths' => [
                '/api/app/home' => [
                    'get' => [
                        'summary' => 'App home sections',
                        'responses' => [
                            '200' => ['description' => 'Home sections returned'],
                        ],
                    ],
                ],
                '/api/app/channels' => [
                    'get' => [
                        'summary' => 'List active channels',
                        'responses' => [
                            '200' => ['description' => 'Channels returned'],
                        ],
                    ],
                ],
                '/api/app/channels/{slug}' => [
                    'get' => [
                        'summary' => 'Get channel detail and videos',
                        'parameters' => [
                            [
                                'name' => 'slug',
                                'in' => 'path',
                                'required' => true,
                                'schema' => ['type' => 'string'],
                            ],
                        ],
                        'responses' => [
                            '200' => ['description' => 'Channel detail returned'],
                            '404' => ['description' => 'Channel not found'],
                        ],
                    ],
                ],
                '/api/app/listen' => [
                    'get' => [
                        'summary' => 'List podcast shows',
                        'parameters' => [
                            [
                                'name' => 'category',
                                'in' => 'query',
                                'required' => false,
                                'schema' => ['type' => 'string'],
                            ],
                            [
                                'name' => 'sort',
                                'in' => 'query',
                                'required' => false,
                                'schema' => ['type' => 'string', 'enum' => ['name', 'episodes']],
                            ],
                        ],
                        'responses' => [
                            '200' => ['description' => 'Podcast shows returned'],
                        ],
                    ],
                ],
                '/api/app/listen/{slug}' => [
                    'get' => [
                        'summary' => 'Get podcast show detail and episodes',
                        'parameters' => [
                            [
                                'name' => 'slug',
                                'in' => 'path',
                                'required' => true,
                                'schema' => ['type' => 'string'],
                            ],
                        ],
                        'responses' => [
                            '200' => ['description' => 'Show detail returned'],
                            '404' => ['description' => 'Show not found'],
                        ],
                    ],
                ],
                '/api/app/live-now' => [
                    'get' => [
                        'summary' => 'Get live and upcoming streams',
                        'responses' => [
                            '200' => ['description' => 'Live streams returned'],
                        ],
                    ],
                ],
                '/api/app/read' => [
                    'get' => [
                        'summary' => 'List article content',
                        'parameters' => [
                            [
                                'name' => 'category',
                                'in' => 'query',
                                'required' => false,
                                'schema' => ['type' => 'integer'],
                            ],
                            [
                                'name' => 'q',
                                'in' => 'query',
                                'required' => false,
                                'schema' => ['type' => 'string'],
                            ],
                            [
                                'name' => 'sort',
                                'in' => 'query',
                                'required' => false,
                                'schema' => ['type' => 'string', 'enum' => ['latest', 'popular']],
                            ],
                        ],
                        'responses' => [
                            '200' => ['description' => 'Articles returned'],
                        ],
                    ],
                ],
                '/api/app/saints' => [
                    'get' => [
                        'summary' => 'List saints content',
                        'parameters' => [
                            [
                                'name' => 'q',
                                'in' => 'query',
                                'required' => false,
                                'schema' => ['type' => 'string'],
                            ],
                            [
                                'name' => 'letter',
                                'in' => 'query',
                                'required' => false,
                                'schema' => ['type' => 'string'],
                            ],
                        ],
                        'responses' => [
                            '200' => ['description' => 'Saints returned'],
                        ],
                    ],
                ],
                '/api/app/donate/config' => [
                    'get' => [
                        'summary' => 'Get donation configuration',
                        'responses' => [
                            '200' => ['description' => 'Donation config returned'],
                        ],
                    ],
                ],
                '/api/app/prayer-requests' => [
                    'post' => [
                        'summary' => 'Submit prayer request',
                        'requestBody' => [
                            'required' => true,
                            'content' => [
                                'application/json' => [
                                    'schema' => [
                                        '$ref' => '#/components/schemas/PrayerRequestInput',
                                    ],
                                    'example' => [
                                        'full_name' => 'John Doe',
                                        'email' => 'john@example.com',
                                        'phone' => '+1 555 123 4567',
                                        'location' => 'Berlin, Germany',
                                        'intention' => 'Please pray for healing and peace for my family.',
                                        'is_private' => true,
                                        'allow_follow_up' => false,
                                    ],
                                ],
                            ],
                        ],
                        'responses' => [
                            '201' => ['description' => 'Prayer request created'],
                            '422' => ['description' => 'Validation failed'],
                        ],
                    ],
                ],
            ],
            'components' => [
                'schemas' => [
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
                ],
            ],
        ]);
    }
}
