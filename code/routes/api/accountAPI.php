<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\AccountController
        as AccountController;

    use App\cfg;
    $secure = cfg::$secure;


    Route::get( '/accounts/{id}',
        [AccountController::class, 'show']
    );

    Route::middleware( $secure )->get( '/accounts/me',
        [AccountController::class, 'me']
    );

    Route::post( '/accounts/create',
        [AccountController::class, 'store']
    );

    Route::middleware( $secure )->patch( '/accounts/update',
        [AccountController::class, 'update']
    );

    Route::middleware( $secure )->delete( '/accounts/delete/{id}',
        [AccountController::class, 'delete']
    );
?>
