<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\ProjectController
        as ProjectController;


    Route::middleware( usingSanctum )->get( '/projects/{id}',
        [ProjectController::class, 'show']
    );

    Route::middleware( usingSanctum )->post( '/projects/create',
        [ProjectController::class, 'store']
    );

    Route::middleware( usingSanctum )->patch( '/projects/update',
        [ProjectController::class, 'update']
    );

    Route::middleware( usingSanctum )->delete( '/projects/delete/{id}',
        [ProjectController::class, 'destroy']
    );
?>
