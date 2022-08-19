<?php
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

    #[OA\Server( url: 'https://backend-exam-zu4kv.ondigitalocean.app/1.0.0/',
                 description: 'public available server' )]

    #[OA\Server( url: 'http://127.0.0.1/api/1.0.0/',
                 description: 'local development server' )]

    final class OpenApi
    {

    };
?>
