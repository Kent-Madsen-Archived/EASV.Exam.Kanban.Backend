<?php
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



    $retrievePath = cfg::versions['v1'] . '/' . cfg::names[ "ac" ] . '/identity/{id}';
    Route::get( $retrievePath,
        [AccountController::class, 'show']
    );

    $loginPath = cfg::versions['v1'] . '/' . cfg::names[ "ac" ] . '/login';
    Route::post( $loginPath,
        [AccountController::class, 'login']
    );


    $createPath = cfg::versions['v1'] . '/' . cfg::names[ "ac" ] . '/' . cfg::actions[ 'c' ];

    Route::post( $createPath,
        [AccountController::class, 'store']
    );

    Route::middleware( $secure )->group(
        function()
        {
            $whoAmIPath = cfg::versions[ 'v1' ] . '/' . cfg::names[ 'ac' ] . '/me';

            Route::get( $whoAmIPath,
                [AccountController::class, 'me']
            );

            $updatePath = cfg::versions['v1'] . '/' . cfg::names[ 'ac' ] . '/' . cfg::actions[ 'u' ];

            Route::patch( $updatePath,
                [AccountController::class, 'update']
            );

            $deletePath = cfg::versions['v1'] . '/' . cfg::names[ 'ac' ] . '/' . cfg::actions[ 'd' ] . '/{id}';

            Route::delete( $deletePath,
                [AccountController::class, 'delete']
            );
        }
    );
?>
