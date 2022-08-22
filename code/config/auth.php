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
    return
    [
        'defaults' =>
        [
            'guard' => 'web',
            'passwords' => 'users',
        ],
        'guards' =>
        [
            'web' =>
            [
                'driver' => 'session',
                'provider' => 'users',
            ],
        ],
        'providers' =>
        [
            'users' =>
            [
                'driver' => 'eloquent',
                'model' => App\Models\User::class,
            ],

            // 'users' => [
            //     'driver' => 'database',
            //     'table' => 'users',
            // ],
        ],
        'passwords' =>
        [
            'users' =>
            [
                'provider' => 'users',
                'table' => 'password_resets',
                'expire' => 60,
                'throttle' => 60,
            ],
        ],
        'password_timeout' => 10800,
    ];
?>
