<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods'   => ['*'],
    'allowed_origins'   => [
        'http://localhost:8080/geoserver/public',
    ],
    'allowed_headers'   => ['*'],
    'exposed_headers'   => [],
    'max_age'           => 3600,
    'supports_credentials' => false,
];

