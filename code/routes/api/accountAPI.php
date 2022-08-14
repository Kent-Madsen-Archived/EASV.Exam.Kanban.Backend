<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\AccountController
        as AccountController;


    Route::get( '/accounts/{id}',
        [AccountController::class, 'show']
    );

    Route::middleware( usingSanctum )->get( '/accounts/me',
        [AccountController::class, 'me']
    );

    Route::post( '/accounts/create',
        [AccountController::class, 'store']
    );

    Route::middleware( usingSanctum )->patch( '/accounts/update',
        [AccountController::class, 'update']
    );

    Route::middleware( usingSanctum )->delete( '/accounts/delete/{id}',
        [AccountController::class, 'delete']
    );
?>
