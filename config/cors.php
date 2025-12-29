<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods'   => ['*'],
    'allowed_origins'   => [
        'https://geoserver-main-vzwrph.laravel.cloud/api',
    ],
    'allowed_headers'   => ['*'],
    'exposed_headers'   => [],
    'max_age'           => 3600,
    'supports_credentials' => false,
];

