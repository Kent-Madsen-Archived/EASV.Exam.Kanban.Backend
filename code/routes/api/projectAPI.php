<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\ProjectController
        as ProjectController;

    use App\cfg;
    $secure = cfg::$secure;

    $retrievePath = cfg::names[ "pj" ] . '/' . cfg::urls[ 'id' ];
    Route::middleware( $secure )->get( $retrievePath,
        [ProjectController::class, 'show']
    );

    $createPath = cfg::names[ "pj" ] . '/' . cfg::actions[ 'c' ];
    Route::middleware( $secure )->post( $createPath,
        [ProjectController::class, 'store']
    );

    $updatePath = cfg::names[ "pj" ] . '/' . cfg::actions[ 'u' ];
    Route::middleware( $secure )->patch( $updatePath,
        [ProjectController::class, 'update']
    );

    $deletePath = cfg::names[ "pj" ] . '/' . cfg::actions[ 'd' ] . '/' . cfg::urls[ 'id' ];
    Route::middleware( $secure )->delete( $deletePath,
        [ProjectController::class, 'destroy']
    );
?>
