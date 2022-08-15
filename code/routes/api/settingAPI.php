<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\SettingController
        as SettingController;

    use App\cfg;
    $secure = cfg::$secure;

    Route::middleware( $secure )->get( '/settings/{id}',
        [SettingController::class, 'show']
    );

    Route::middleware( $secure )->post( '/settings/create',
        [SettingController::class, 'store']
    );

    Route::middleware( $secure )->patch( '/settings/update',
        [SettingController::class, 'update']
    );

    Route::middleware( $secure )->delete( '/settings/delete/{id}',
        [SettingController::class, 'destroy']
    );
?>
