<?php 
return [
    'defaults' => [
        'guard' => 'api',
        'passwords' => 'users',
    ],

    'guards' => [
        'api' => [
            'driver' => 'passport',
            'provider' => 'users',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => \App\Models\User::class
        ]
    ],
    'passport' => [ // Unique name of security
        'type' => 'oauth2', // The type of the security scheme. Valid values are "basic", "apiKey" or "oauth2".
        'description' => 'Laravel passport oauth2 security.',
        'flow' => 'password', // The flow used by the OAuth2 security scheme. Valid values are "implicit", "password", "application" or "accessCode".
        'tokenUrl' => config('app.url') . '/oauth/token', // The authorization URL to be used for (password/application/accessCode)
        'scopes' => []
    ]
];
?>