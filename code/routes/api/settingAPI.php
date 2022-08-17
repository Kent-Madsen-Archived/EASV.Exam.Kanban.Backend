<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\SettingController
        as SettingController;

    use App\cfg;
    $secure = cfg::$secure;

    Route::middleware( $secure )->get( cfg::versions['v1'] . '/settings/identity/{id}',
        [SettingController::class, 'show']
    );

    Route::middleware( $secure )->post( cfg::versions['v1'] . '/settings/create',
        [SettingController::class, 'store']
    );

    Route::middleware( $secure )->patch( cfg::versions['v1'] . '/settings/update',
        [SettingController::class, 'update']
    );

    Route::middleware( $secure )->delete( cfg::versions['v1'] . '/settings/delete/{id}',
        [SettingController::class, 'destroy']
    );
?>
