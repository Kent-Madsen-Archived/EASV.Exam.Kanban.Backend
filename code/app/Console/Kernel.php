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
    namespace App\Console;

    use Illuminate\Console\Scheduling\Schedule;

    use Illuminate\Foundation\Console\Kernel
        as ConsoleKernel;


    class Kernel
        extends ConsoleKernel
    {

        protected function schedule( Schedule $schedule )
        {
            // $schedule->command('inspire')->hourly();
        }


        protected function commands()
        {
            $this->load(__DIR__.'/Commands');

            require base_path('routes/console.php');
        }
    }
?>
