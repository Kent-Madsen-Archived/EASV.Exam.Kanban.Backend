<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\ImagesController
        as ImageController;

    use App\cfg;
    $secure = cfg::$secure;

    $retrievePath = cfg::names[ 're' ] . '/' . cfg::resources[ 'img' ] . '/' . cfg::urls[ 'id' ];
    Route::get( $retrievePath,
        [ImageController::class, 'show']
    );

    $createPath = cfg::names[ 're' ] . '/' . cfg::resources[ 'img' ] . '/' . cfg::actions[ 'c' ];
    Route::middleware( $secure )->post( $createPath,
        [ImageController::class, 'store']
    );

    $updatePath = cfg::names[ 're' ] . '/' . cfg::resources[ 'img' ] . '/' . cfg::actions[ 'u' ];
    Route::middleware( $secure )->patch( $updatePath,
        [ImageController::class, 'update']
    );

    $deletePath = cfg::names[ 're' ] . '/' . cfg::resources[ 'img' ] . '/' . cfg::actions[ 'd' ] . '/' . cfg::urls[ 'id' ];
    Route::middleware( $secure )->delete( $deletePath,
        [ImageController::class, 'destroy']
    );
?>
