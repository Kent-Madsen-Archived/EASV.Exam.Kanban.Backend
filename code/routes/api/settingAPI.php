<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\SettingController
        as SettingController;


    Route::middleware( usingSanctum )->get( '/settings/{id}',
        [SettingController::class, 'show']
    );

    Route::middleware( usingSanctum )->post( '/settings/create',
        [SettingController::class, 'store']
    );

    Route::middleware( usingSanctum )->patch( '/settings/update',
        [SettingController::class, 'update']
    );

    Route::middleware( usingSanctum )->delete( '/settings/delete/{id}',
        [SettingController::class, 'destroy']
    );
?>
