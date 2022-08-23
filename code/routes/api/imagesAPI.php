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
    use App\Http\Controllers\Resources\ImagesController
        as ImageController;


    $secure = Configuration::$secure;

    $retrievePath = Configuration::versions[ 'v1' ] . '/' .
                    Configuration::names[ 're' ] . '/' .
                    Configuration::resources[ 'img' ] . '/identity/' .
                    Configuration::urls[ 'id' ];
    Route::get( $retrievePath,
        [ImageController::class, 'show']
    );


    $createPath = Configuration::versions[ 'v1' ] . '/' .
                  Configuration::names[ 're' ] . '/' .
                  Configuration::resources[ 'img' ] . '/' .
                  Configuration::actions[ 'c' ];
    Route::middleware( $secure )->post( $createPath,
        [ImageController::class, 'store']
    );


    $updatePath = Configuration::versions[ 'v1' ] . '/' .
                  Configuration::names[ 're' ] . '/' .
                  Configuration::resources[ 'img' ] . '/' .
                  Configuration::actions[ 'u' ];
    Route::middleware( $secure )->patch( $updatePath,
        [ImageController::class, 'update']
    );


    $deletePath = Configuration::versions[ 'v1' ] . '/' .
                  Configuration::names[ 're' ] . '/' .
                  Configuration::resources[ 'img' ] . '/' .
                  Configuration::actions[ 'd' ] . '/' .
                  Configuration::urls[ 'id' ];
    Route::middleware( $secure )->delete( $deletePath,
        [ImageController::class, 'destroy']
    );
?>
