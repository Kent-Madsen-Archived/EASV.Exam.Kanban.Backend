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
    use Illuminate\Support\Facades\Route;

    use App\Configuration;
    use App\Http\Controllers\Projects\TaskGroupController
        as TaskGroupController;

    $secure = Configuration::$secure;


    Route::middleware( $secure )->get(
        Configuration::versions[ 'v1' ] . '/tasks/groups/identity/{id}',
        [ TaskGroupController::class, 'show' ]
    );


    Route::middleware( $secure )->post(
        Configuration::versions[ 'v1' ] . '/tasks/groups/create',
        [ TaskGroupController::class, 'store' ]
    );


    Route::middleware( $secure )->patch(
        Configuration::versions[ 'v1' ] . '/tasks/groups/update',
        [  TaskGroupController::class, 'update' ]
    );


    Route::middleware( $secure )->delete(
        Configuration::versions[ 'v1' ] . '/tasks/groups/delete/{id}',
        [ TaskGroupController::class, 'destroy' ]
    );
?>
