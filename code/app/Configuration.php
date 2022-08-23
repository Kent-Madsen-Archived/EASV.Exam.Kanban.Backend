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


    class Configuration
    {
        public static string $secure = 'auth:sanctum';

        public const actions =
        [
            'c' => 'create',
            'd' => 'delete',
            'u' => 'update'
        ];

        public const names =
        [
            'ac' => 'accounts',
            'pj' => 'projects',
            're' => 'resources',
            'se' => 'settings',
            'ta' => 'tasks',
            'te' => 'teams'
        ];

        public const resources =
        [
            'img' => 'images'
        ];

        public const urls =
        [
            'id' => '{id}'
        ];

        public const versions =
        [
            'v1' => '1.0.0'
        ];
    }
?>
