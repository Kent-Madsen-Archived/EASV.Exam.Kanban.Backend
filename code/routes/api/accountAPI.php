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
    use App\Http\Controllers\Profile\AccountController
        as AccountController;

    $secure = Configuration::$secure;


    Route::prefix( Configuration::versions[ 'v1' ] )->group(
        function()
        {

        }
    );


    $indexPath = Configuration::versions[ 'v1' ] . '/' .
                 Configuration::names[ 'ac' ] . '/index';
        Route::get( $indexPath,
                    [ AccountController::class, 'index' ]
    );


    $retrievePath = Configuration::versions[ 'v1' ] . '/' .
                    Configuration::names[ 'ac' ] . '/identity/{id}';
    Route::get( $retrievePath,
                [ AccountController::class, 'show' ]
    );


    $loginPath = Configuration::versions[ 'v1' ] . '/' .
                 Configuration::names[ 'ac' ] . '/login';
    Route::post( $loginPath,
                 [ AccountController::class, 'login' ]
    );


    $createPath = Configuration::versions[ 'v1' ] . '/' .
                  Configuration::names[ 'ac' ] . '/' .
                  Configuration::actions[ 'c' ];

    Route::post( $createPath,
        [ AccountController::class, 'store' ]
    );


    Route::middleware( $secure )->group(
        function()
        {
            $whoAmIPath = Configuration::versions[ 'v1' ] . '/' . Configuration::names[ 'ac' ] . '/me';
            Route::get( $whoAmIPath,
                [ AccountController::class, 'me' ]
            );

            $updatePath = Configuration::versions[ 'v1' ] . '/' . Configuration::names[ 'ac' ] . '/' . Configuration::actions[ 'u' ];
            Route::patch( $updatePath,
                [ AccountController::class, 'update' ]
            );

            $deletePath = Configuration::versions[ 'v1' ] . '/' . Configuration::names[ 'ac' ] . '/' . Configuration::actions[ 'd' ];
            Route::delete( $deletePath,
                [ AccountController::class, 'delete' ]
            );

            $verifyPath = Configuration::versions[ 'v1' ] . '/' . Configuration::names[ 'ac' ] . '/verify/request';
            Route::post( $verifyPath,
                         [ AccountController::class, 'verify' ]
            );

            $verifyPath = Configuration::versions[ 'v1' ] . '/' . Configuration::names[ 'ac' ] . '/verify/now';
            Route::post( $verifyPath,
                        [ AccountController::class, 'verify_now' ]
            );

            $logoutPath = Configuration::versions[ 'v1' ] . '/' . Configuration::names[ 'ac' ] . '/logout';
            Route::post( $logoutPath,
                         [ AccountController::class, 'logout' ]
            );

            $resetPath = Configuration::versions[ 'v1' ] . '/' . Configuration::names[ 'ac' ] . '/reset_tokens';
            Route::post( $resetPath,
                        [ AccountController::class, 'resetTokens' ]
            );
        }
    );
?>
