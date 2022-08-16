<?php
    namespace App;

    class cfg
    {
        public static string $secure = 'auth:sanctum';

        public const actions =
        [
            "c" => 'create',
            "d" => 'delete',
            "u" => 'update'
        ];

        public const names =
        [
            'ac' => 'accounts',
            'pj' =>'projects',
            're' => 'resources',
            'se' => 'settings',
            'ta' => 'tasks',
            'te' => 'teams'
        ];
    }
?>
