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
        'mailgun' =>
        [
            'domain'    => env( 'MAILGUN_DOMAIN' ),
            'secret'    => env( 'MAILGUN_SECRET' ),
            'endpoint'  => env( 'MAILGUN_ENDPOINT', 'api.mailgun.net' ),
            'scheme'    => 'https',
        ],

        'postmark' =>
        [
            'token' => env( 'POSTMARK_TOKEN' ),
        ],

        'ses' =>
        [
            'key'    => env( 'AWS_ACCESS_KEY_ID' ),
            'secret' => env( 'AWS_SECRET_ACCESS_KEY' ),
            'region' => env( 'AWS_DEFAULT_REGION', 'us-east-1' ),
        ],
    ];
?>
