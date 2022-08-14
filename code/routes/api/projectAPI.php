<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\ProjectController
            as ProjectController;


    Route::middleware( middlewareSanctum )->get( '/projects/{id}',
        [ProjectController::class, '']
    );

    Route::middleware( middlewareSanctum )->post( '/projects/create',
        [ProjectController::class, '']
    );

    Route::middleware( middlewareSanctum )->patch( '/projects/update',
        [ProjectController::class, '']
    );

    Route::middleware( middlewareSanctum )->delete( '/projects/delete/{id}',
        [ProjectController::class, '']
    );
?>
