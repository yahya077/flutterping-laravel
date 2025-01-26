<?php

use Flutterping\Http\Middleware\HandleFlutterpingRequests;

return [
    'client' => 'app_client',
    'main_navigator_key' => 'main_navigator_key',
    'apps' => [
        'app' => [
            'domain' => env('FP_APP_DOMAIN', 'localhost'),
            'prefix' => env('FP_APP_PREFIX', ''),
            'middlewares' => [],
            'initialize_controller' => null,
            'initialize_action' => null,
        ]
    ],
    'excluded_paths' => []
];
