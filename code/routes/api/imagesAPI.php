<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\ImagesController
        as ImageController;

    use App\cfg;
    $secure = cfg::$secure;


    Route::get( '/resources/images/{id}',
        [ImageController::class, 'show']
    );

    Route::middleware( $secure )->post( '/resources/images/create',
        [ImageController::class, 'store']
    );

    Route::middleware( $secure )->patch( '/resources/images/update',
        [ImageController::class, 'update']
    );

    Route::middleware( $secure )->delete( '/resources/images/delete/{id}',
        [ImageController::class, 'destroy']
    );
?>
