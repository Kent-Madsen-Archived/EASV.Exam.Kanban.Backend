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
    namespace App\Exceptions;

    use Illuminate\Foundation\Exceptions\Handler
        as ExceptionHandler;

    use Throwable;


    class Handler
        extends ExceptionHandler
    {
        protected $levels =
        [
            //
        ];


        protected $dontReport =
        [
            //
        ];


        protected $dontFlash =
        [
            'current_password',
            'password',
            'password_confirmation',
        ];


        public function register()
        {
            $this->reportable(
                function( Throwable $e )
                {
                //
                }
            );
        }
    }
?>
