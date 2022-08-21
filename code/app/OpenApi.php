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
    namespace App;

	// External
    use OpenApi\Attributes
        as OA;

    #[OA\Info( version: '1.0.0',
               title: 'Kanban Exam Project' ) ]

    #[OA\Contact( name: 'kent vejrup madsen',
                  url: 'https://github.com/KentVejrupMadsen',
                  email: 'kent.vejrup.madsen@protonmail.com')]

    #[OA\License( name: 'MIT License',
                  url: 'https://github.com/KentVejrupMadsen/EASV.Exam.Kanban.Backend/blob/main/license.md' )]

    #[OA\Server( url: 'https://backend-exam-zu4kv.ondigitalocean.app',
                 description: 'public available server' )]

    #[OA\Server( url: 'http://127.0.0.1',
                 description: 'local development server' )]

    #[OA\SecurityScheme( securityScheme: 'bearerToken',
                         type: 'http',
                         description: 'bearer token - has to be included in the header of the request',
                         name: 'bearer authorization',
                         in: 'header',
                         bearerFormat: 'JWT',
                         scheme: 'bearer' )]

    final class OpenApi
    {

    };
?>
