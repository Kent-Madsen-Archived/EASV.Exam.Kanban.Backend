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
        'default' => env( 'QUEUE_CONNECTION', 'sync' ),

        'connections' =>
        [
            'sync' =>
            [
                'driver' => 'sync',
            ],

            'database' =>
            [
                'driver'        => 'database',
                'table'         => 'jobs',
                'queue'         => 'default',
                'retry_after'   => 90,
                'after_commit'  => false,
            ],

            'beanstalkd' =>
            [
                'driver'        => 'beanstalkd',
                'host'          => 'localhost',
                'queue'         => 'default',
                'retry_after'   => 90,
                'block_for'     => 0,
                'after_commit'  => false,
            ],

            'sqs' =>
            [
                'driver'        => 'sqs',
                'key'           => env('AWS_ACCESS_KEY_ID'),
                'secret'        => env('AWS_SECRET_ACCESS_KEY'),
                'prefix'        => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
                'queue'         => env('SQS_QUEUE', 'default'),
                'suffix'        => env('SQS_SUFFIX'),
                'region'        => env('AWS_DEFAULT_REGION', 'us-east-1'),
                'after_commit'  => false,
            ],

            'redis' =>
            [
                'driver'       => 'redis',
                'connection'   => 'default',
                'queue'        => env('REDIS_QUEUE', 'default'),
                'retry_after'  => 90,
                'block_for'    => null,
                'after_commit' => false,
            ],
        ],

        'failed' =>
        [
            'driver'    => env('QUEUE_FAILED_DRIVER', 'database-uuids'),
            'database'  => env('DB_CONNECTION', 'mysql'),
            'table'     => 'failed_jobs',
        ],
    ];
?>
