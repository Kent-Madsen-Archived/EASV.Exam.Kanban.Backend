<?php
    use Illuminate\Support\Str;

    return
    [
        'driver' => env('SESSION_DRIVER', 'database'),

        'lifetime' => env('SESSION_LIFETIME', 3600),

        'expire_on_close' => false,

        'encrypt' => true,

        'files' => storage_path('framework/sessions'),
        'connection' => env('SESSION_CONNECTION'),
        'table' => 'sessions',

        'store' => env('SESSION_STORE'),

        'lottery' => [50, 500],

        'cookie' => env(
            'SESSION_COOKIE',
            Str::slug(env('APP_NAME', 'laravel'), '_').'_session'
        ),

        'path' => '/',

        'domain' => env('SESSION_DOMAIN'),
        'secure' => env('SESSION_SECURE_COOKIE'),

        'http_only' => true,
        'same_site' => 'strict',
    ];
?>
