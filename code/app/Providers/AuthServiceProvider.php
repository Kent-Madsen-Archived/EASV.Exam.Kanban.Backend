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

    // use Illuminate\Support\Facades\Gate;
    use Illuminate\Foundation\Support\Providers\AuthServiceProvider
        as ServiceProvider;


    class AuthServiceProvider
        extends ServiceProvider
    {

        protected $policies =
        [
            // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        ];


        public function boot()
        {
            $this->registerPolicies();

            //
        }
    }
?>
