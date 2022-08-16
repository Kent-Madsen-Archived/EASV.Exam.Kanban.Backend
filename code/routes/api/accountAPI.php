<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\AccountController
        as AccountController;

    use App\cfg;
    $secure = cfg::$secure;

    $retrievePath = cfg::names[ "ac" ] . '/{id}';
    Route::get( $retrievePath,
        [AccountController::class, 'show']
    );

    $mePath = cfg::names[ "ac" ] . '/me';
    Route::middleware( $secure )->get( $mePath,
        [AccountController::class, 'me']
    );

    $createPath = cfg::names[ "ac" ] . '/' . cfg::actions[ 'c' ];
    Route::post( $createPath,
        [AccountController::class, 'store']
    );

    $updatePath = cfg::names[ "ac" ] . '/' . cfg::actions[ 'u' ];
    Route::middleware( $secure )->patch( $updatePath,
        [AccountController::class, 'update']
    );

    $deletePath = cfg::names[ "ac" ] . '/' . cfg::actions[ 'd' ] . '/{id}';
    Route::middleware( $secure )->delete( $deletePath,
        [AccountController::class, 'delete']
    );
?>
