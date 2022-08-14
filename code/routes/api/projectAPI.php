<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\ProjectController
            as ProjectController;


    Route::middleware( middlewareSanctum )->get( '/projects/{id}',
        [ProjectController::class, 'show']
    );

    Route::middleware( middlewareSanctum )->post( '/projects/create',
        [ProjectController::class, 'store']
    );

    Route::middleware( middlewareSanctum )->patch( '/projects/update',
        [ProjectController::class, 'update']
    );

    Route::middleware( middlewareSanctum )->delete( '/projects/delete/{id}',
        [ProjectController::class, 'destroy']
    );
?>
