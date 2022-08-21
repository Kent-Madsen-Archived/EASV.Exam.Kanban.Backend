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

    use App\Http\Controllers\AccountController
        as AccountController;

    use App\cfg;
    $secure = cfg::$secure;

    
    Route::prefix( cfg::versions[ 'v1' ] )->group(
        function()
        {

        }
    );


    $indexPath = cfg::versions[ 'v1' ] . '/' . cfg::names[ 'ac' ] . '/index';
        Route::get( $indexPath,
                    [ AccountController::class, 'index' ]
    );

    $retrievePath = cfg::versions[ 'v1' ] . '/' . cfg::names[ 'ac' ] . '/identity/{id}';
    Route::get( $retrievePath,
                [ AccountController::class, 'show' ]
    );

    $loginPath = cfg::versions[ 'v1' ] . '/' . cfg::names[ 'ac' ] . '/login';
    Route::post( $loginPath,
                 [ AccountController::class, 'login' ]
    );

    $createPath = cfg::versions[ 'v1' ] . '/' . cfg::names[ "ac" ] . '/' . cfg::actions[ 'c' ];

    Route::post( $createPath,
        [ AccountController::class, 'store' ]
    );

    Route::middleware( $secure )->group(
        function()
        {
            $whoAmIPath = cfg::versions[ 'v1' ] . '/' . cfg::names[ 'ac' ] . '/me';
            Route::get( $whoAmIPath,
                [ AccountController::class, 'me' ]
            );

            $updatePath = cfg::versions[ 'v1' ] . '/' . cfg::names[ 'ac' ] . '/' . cfg::actions[ 'u' ];
            Route::patch( $updatePath,
                [ AccountController::class, 'update' ]
            );

            $deletePath = cfg::versions[ 'v1' ] . '/' . cfg::names[ 'ac' ] . '/' . cfg::actions[ 'd' ];
            Route::delete( $deletePath,
                [ AccountController::class, 'delete' ]
            );

            $verifyPath = cfg::versions[ 'v1' ] . '/' . cfg::names[ 'ac' ] . '/verify/request';
            Route::post( $verifyPath,
                         [ AccountController::class, 'verify' ]
            );

            $verifyPath = cfg::versions[ 'v1' ] . '/' . cfg::names[ 'ac' ] . '/verify/now';
            Route::post( $verifyPath,
                        [ AccountController::class, 'verify_now' ]
            );

            $logoutPath = cfg::versions[ 'v1' ] . '/' . cfg::names[ 'ac' ] . '/logout';
            Route::post( $logoutPath,
                         [ AccountController::class, 'logout' ]
            );

            $resetPath = cfg::versions[ 'v1' ] . '/' . cfg::names[ 'ac' ] . '/reset_tokens';
            Route::post( $resetPath,
                        [ AccountController::class, 'resetTokens' ]
            );
        }
    );
?>
