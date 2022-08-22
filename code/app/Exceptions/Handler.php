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
        /**
         * A list of exception types with their corresponding custom log levels.
         *
         * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
         */
        protected $levels = [
            //
        ];

        /**
         * A list of the exception types that are not reported.
         *
         * @var array<int, class-string<\Throwable>>
         */
        protected $dontReport = [
            //
        ];

        /**
         * A list of the inputs that are never flashed to the session on validation exceptions.
         *
         * @var array<int, string>
         */
        protected $dontFlash = [
            'current_password',
            'password',
            'password_confirmation',
        ];

        /**
         * Register the exception handling callbacks for the application.
         *
         * @return void
         */
        public function register()
        {
            $this->reportable(function (Throwable $e) {
                //
            });
        }
    }
?>
