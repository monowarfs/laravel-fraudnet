<?php

return [
    'debug' => env('APP_DEBUG', false),
    'sandbox' => env('FRAUDNET_SANDBOX', false),
    'base_url' => env('FRAUDNET_BASE_URL'),
    'sandbox_base_url' => env('FRAUDNET_SANDBOX_BASE_URL'),
    'auth_username' => env('FRAUDNET_AUTH_USERNAME'),
    'auth_password' => env('FRAUDNET_AUTH_PASSWORD'),
    'api_error_report_email' => env('FRAUDNET_REPORT_EMAIL')
];
