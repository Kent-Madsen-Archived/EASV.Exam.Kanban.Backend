<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\ImagesController
        as ImageController;


    Route::get( '/resources/images/{id}',
        [ImageController::class, 'show']
    );

    Route::middleware( usingSanctum )->post( '/resources/images/create',
        [ImageController::class, 'store']
    );

    Route::middleware( usingSanctum )->patch( '/resources/images/update',
        [ImageController::class, 'update']
    );

    Route::middleware( usingSanctum )->delete( '/resources/images/delete/{id}',
        [ImageController::class, 'destroy']
    );
?>
