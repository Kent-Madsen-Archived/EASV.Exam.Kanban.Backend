<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\AccountController
        as AccountController;

    use App\cfg;
    $secure = cfg::$secure;

    $retrievePath = cfg::versions['v1'] . '/' . cfg::names[ "ac" ] . '/{id}';
    Route::get( $retrievePath,
        [AccountController::class, 'show']
    );

    $loginPath = cfg::versions['v1'] . '/' . cfg::names[ "ac" ] . '/login';
    Route::post( $loginPath,
        [AccountController::class, 'login']
    );

    $mePath = cfg::versions['v1'] . '/' . cfg::names[ "ac" ] . '/me';
    Route::middleware( $secure )->get( $mePath,
        [AccountController::class, 'me']
    );

    $createPath = cfg::versions['v1'] . '/' . cfg::names[ "ac" ] . '/' . cfg::actions[ 'c' ];
    Route::post( $createPath,
        [AccountController::class, 'store']
    );

    $updatePath = cfg::versions['v1'] . '/' . cfg::names[ "ac" ] . '/' . cfg::actions[ 'u' ];
    Route::middleware( $secure )->patch( $updatePath,
        [AccountController::class, 'update']
    );

    $deletePath = cfg::versions['v1'] . '/' . cfg::names[ "ac" ] . '/' . cfg::actions[ 'd' ] . '/{id}';
    Route::middleware( $secure )->delete( $deletePath,
        [AccountController::class, 'delete']
    );
?>
