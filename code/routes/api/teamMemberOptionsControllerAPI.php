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
    use App\Http\Controllers\Profile\TeamMemberOptionController
        as TeamMemberOptionController;

    $secure = Configuration::$secure;


    Route::middleware( $secure )->get(
        Configuration::versions[ 'v1' ] . '/teams/members/options/identity/{id}',
        [ TeamMemberOptionController::class, 'show' ]
    );


    Route::middleware( $secure )->post(
        Configuration::versions[ 'v1' ] . '/teams/members/options/create',
        [ TeamMemberOptionController::class, 'store' ]
    );


    Route::middleware( $secure )->patch(
        Configuration::versions[ 'v1' ] . '/teams/members/options/update',
        [ TeamMemberOptionController::class, 'update' ]
    );


    Route::middleware( $secure )->delete(
        Configuration::versions[ 'v1' ] . '/teams/members/options/delete/{id}',
        [ TeamMemberOptionController::class, 'destroy' ]
    );
?>
