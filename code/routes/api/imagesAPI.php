<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\ImagesController
        as ImageController;


    Route::get( '/resources/images/{id}',
        [ImageController::class, 'show']
    );

    Route::middleware( middlewareSanctum )->post( '/resources/images/create',
        [ImageController::class, 'store']
    );

    Route::middleware( middlewareSanctum )->patch( '/resources/images/update',
        [ImageController::class, 'update']
    );

    Route::middleware( middlewareSanctum )->delete( '/resources/images/delete/{id}',
        [ImageController::class, 'destroy']
    );
?>
