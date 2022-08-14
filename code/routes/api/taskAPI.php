<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\TaskController
        as TaskController;

    Route::middleware( middlewareSanctum )->get( '/tasks/{id}',
        [TaskController::class, '']
    );

    Route::middleware( middlewareSanctum )->post( '/tasks/create',
        [TaskController::class, '']
    );

    Route::middleware( middlewareSanctum )->patch( '/tasks/update',
        [TaskController::class, '']
    );

    Route::middleware( middlewareSanctum )->delete( '/tasks/delete/{id}',
        [TaskController::class, '']
    );
?>
