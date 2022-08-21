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
        'default' => env('FILESYSTEM_DISK', 'local'),

        'disks' =>
        [
            'local' =>
            [
                'driver'    => 'local',
                'root'      => storage_path('app'),
                'throw'     => false,
            ],

            'public' =>
            [
                'driver'     => 'local',
                'root'       => storage_path('app/public'),
                'url'        => env('APP_URL').'/storage',
                'visibility' => 'public',
                'throw'      => false,
            ],

            's3' =>
            [
                'driver'                  => 's3',
                'key'                     => env('AWS_ACCESS_KEY_ID'),
                'secret'                  => env('AWS_SECRET_ACCESS_KEY'),
                'region'                  => env('AWS_DEFAULT_REGION'),
                'bucket'                  => env('AWS_BUCKET'),
                'cdn_endpoint'            => env('AWS_CDN_ENDPOINT'),
                'url'                     => env('AWS_URL'),
                'endpoint'                => env('AWS_ENDPOINT'),
                'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
                'throw'                   => false,
            ],
        ],

        'links' =>
        [
            public_path('storage') => storage_path('app/public'),
        ],
    ];
?>
