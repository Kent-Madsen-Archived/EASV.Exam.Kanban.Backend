<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\SettingController
        as SettingController;


    Route::middleware( middlewareSanctum )->get( '/settings/{id}',
        [SettingController::class, 'show']
    );

    Route::middleware( middlewareSanctum )->post( '/settings/create',
        [SettingController::class, 'store']
    );

    Route::middleware( middlewareSanctum )->patch( '/settings/update',
        [SettingController::class, 'update']
    );

    Route::middleware( middlewareSanctum )->delete( '/settings/delete/{id}',
        [SettingController::class, 'destroy']
    );
?>
