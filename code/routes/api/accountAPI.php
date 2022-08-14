<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\AccountController
        as AccountController;


    Route::get( '/accounts/{id}',
        [AccountController::class, '']
    );


    Route::middleware( middlewareSanctum )->get( '/accounts/me',
        [AccountController::class, '']
    );


    Route::post( '/accounts/create',
        [AccountController::class, '']
    );

    Route::middleware( middlewareSanctum )->patch( '/accounts/update',
        [AccountController::class, '']
    );

    Route::middleware( middlewareSanctum )->delete( '/accounts/delete/{id}',
        [AccountController::class, '']
    );

?>
