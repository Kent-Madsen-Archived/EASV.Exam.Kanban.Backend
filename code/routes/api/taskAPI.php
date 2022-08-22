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
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\TaskController
        as TaskController;

    use App\Configuration;
    $secure = Configuration::$secure;


    Route::middleware( $secure )->get(
        Configuration::versions[ 'v1' ] . '/tasks/index',
        [ TaskController::class, 'index' ]
    );


    Route::middleware( $secure )->get(
        Configuration::versions[ 'v1' ] . '/tasks/identity/{id}',
        [ TaskController::class, 'show' ]
    );


    Route::middleware( $secure )->post(
        Configuration::versions[ 'v1' ] . '/tasks/create',
        [ TaskController::class, 'store' ]
    );


    Route::middleware( $secure )->patch(
        Configuration::versions[ 'v1' ] . '/tasks/update',
        [ TaskController::class, 'update' ]
    );


    Route::middleware( $secure )->delete(
        Configuration::versions[ 'v1' ] . '/tasks/delete/{id}',
        [ TaskController::class, 'destroy' ]
    );
?>
