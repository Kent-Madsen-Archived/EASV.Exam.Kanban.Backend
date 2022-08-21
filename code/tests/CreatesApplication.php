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
    namespace Tests;

    use Illuminate\Contracts\Console\Kernel;


    trait CreatesApplication
    {

        public function createApplication()
        {
            $app = require __DIR__.'/../bootstrap/app.php';
            $app->make( Kernel::class )->bootstrap();

            return $app;
        }
    }
?>
