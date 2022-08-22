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
    namespace App\Providers;

    use Illuminate\Auth\Events\Registered;
    use Illuminate\Auth\Listeners\SendEmailVerificationNotification;

    use Illuminate\Foundation\Support\Providers\EventServiceProvider
        as ServiceProvider;

    use Illuminate\Support\Facades\Event;


    class EventServiceProvider
        extends ServiceProvider
    {

        protected $listen =
        [
            Registered::class =>
            [
                SendEmailVerificationNotification::class,
            ],
        ];

        public function boot()
        {
            //
        }

        public function shouldDiscoverEvents()
        {
            return false;
        }
    }
?>
