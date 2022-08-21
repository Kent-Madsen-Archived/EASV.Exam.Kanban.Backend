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
        'paths'                    => ['api/*', 'sanctum/csrf-cookie'],
        'allowed_methods'          => ['*'],
        'allowed_origins'          => ['*'],
        'allowed_origins_patterns' => [],
        'allowed_headers'          => ['*'],
        'exposed_headers'          => [],
        'max_age'                  => 0,
        'supports_credentials'     => false,
    ];
?>
