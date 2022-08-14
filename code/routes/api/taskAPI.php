<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\TaskController
        as TaskController;

    Route::middleware( middlewareSanctum )->get( '/tasks/{id}',
        [TaskController::class, 'show']
    );

    Route::middleware( middlewareSanctum )->post( '/tasks/create',
        [TaskController::class, 'store']
    );

    Route::middleware( middlewareSanctum )->patch( '/tasks/update',
        [TaskController::class, 'update']
    );

    Route::middleware( middlewareSanctum )->delete( '/tasks/delete/{id}',
        [TaskController::class, 'destroy']
    );
?>
