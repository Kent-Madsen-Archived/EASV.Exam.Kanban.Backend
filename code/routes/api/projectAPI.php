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

    use App\Configuration;
    $secure = Configuration::$secure;

    $retrievePath = Configuration::versions[ 'v1' ] . '/' .
                    Configuration::names[ 'pj' ] . '/identity/' .
                    Configuration::urls[ 'id' ];
    Route::middleware( $secure )->get( $retrievePath,
                                       [ ProjectController::class, 'show' ]
    );


    $indexPath = Configuration::versions[ 'v1' ] . '/' .
                 Configuration::names[ 'pj' ] . '/index';
    Route::middleware( $secure )->get( $indexPath,
                                       [ ProjectController::class, 'index' ]
    );


    $createPath = Configuration::versions[ 'v1' ] . '/' .
                  Configuration::names[ 'pj' ] . '/' .
                  Configuration::actions[ 'c' ];
    Route::middleware( $secure )->post( $createPath,
                                        [ ProjectController::class, 'store' ]
    );


    $updatePath = Configuration::versions[ 'v1' ] . '/' .
                  Configuration::names[ 'pj' ] . '/' .
                  Configuration::actions[ 'u' ];
    Route::middleware( $secure )->patch( $updatePath,
                                        [ ProjectController::class, 'update' ]
    );


    $deletePath = Configuration::versions[ 'v1' ] . '/' .
                  Configuration::names[ 'pj' ] . '/' .
                  Configuration::actions[ 'd' ] . '/' .
                  Configuration::urls[ 'id' ];
    Route::middleware( $secure )->delete( $deletePath,
                                          [ ProjectController::class, 'destroy' ]
    );
?>
