<?php
    /**
     * Author: Kent Madsen
     * Version: 1.0.0
     * Copyright: 2022, Kent vejrup Madsen
     *
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Code of Conduct: https://github.com/KentVejrupMadsen/EASV.Exam.Kanban.Backend/blob/main/code_of_conduct.md
     *
     * License: https://github.com/KentVejrupMadsen/EASV.Exam.Kanban.Backend/blob/main/license.md
     */
    use Laravel\Sanctum\Sanctum;


    return
    [
        'stateful' => explode(',',

        env('SANCTUM_STATEFUL_DOMAINS',
                sprintf(
                    '%s%s',
                    'localhost,localhost:3000,localhost:8080,127.0.0.1,127.0.0.1:8000,127.0.0.1:8080,::1',
                    Sanctum::currentApplicationUrlWithPort()
                )
            )
        ),

        'guard' => ['web'],

        // 6 Hours
        'expiration' => 360,

        'middleware' =>
        [
            'verify_csrf_token' => App\Http\Middleware\VerifyCsrfToken::class,
            'encrypt_cookies' => App\Http\Middleware\EncryptCookies::class,
        ],
    ];
?>
