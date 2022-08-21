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
    use Illuminate\Contracts\Http\Kernel;
    use Illuminate\Http\Request;


    define( 'LARAVEL_START', microtime( true ) );

    if ( file_exists( $maintenance = __DIR__.'/../storage/framework/maintenance.php' ) )
    {
        require $maintenance;
    }

    require __DIR__.'/../vendor/autoload.php';
    $app = require_once __DIR__.'/../bootstrap/app.php';


    $kernel = $app->make( Kernel::class );

    $response = $kernel->handle(
        $request = Request::capture()
    )->send();

    $kernel->terminate( $request, $response );
?>
