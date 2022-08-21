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

    use App\Http\Controllers\ProjectController
        as ProjectController;

    use App\cfg;
    $secure = cfg::$secure;

    $retrievePath = cfg::versions['v1'] . '/' . cfg::names[ "pj" ] . '/identity/' . cfg::urls[ 'id' ];
    Route::middleware( $secure )->get( $retrievePath,
        [ProjectController::class, 'show']
    );

    $indexPath = cfg::versions['v1'] . '/' . cfg::names[ "pj" ] . '/index';
    Route::middleware( $secure )->get( $indexPath,
            [ProjectController::class, 'index']
    );

    $createPath = cfg::versions['v1'] . '/' . cfg::names[ "pj" ] . '/' . cfg::actions[ 'c' ];
    Route::middleware( $secure )->post( $createPath,
        [ProjectController::class, 'store']
    );

    $updatePath = cfg::versions['v1'] . '/' . cfg::names[ "pj" ] . '/' . cfg::actions[ 'u' ];
    Route::middleware( $secure )->patch( $updatePath,
        [ProjectController::class, 'update']
    );

    $deletePath = cfg::versions['v1'] . '/' . cfg::names[ "pj" ] . '/' . cfg::actions[ 'd' ] . '/' . cfg::urls[ 'id' ];
    Route::middleware( $secure )->delete( $deletePath,
        [ProjectController::class, 'destroy']
    );
?>
