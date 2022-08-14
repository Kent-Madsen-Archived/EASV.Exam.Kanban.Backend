<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\TaskController
        as TaskController;


    Route::middleware( usingSanctum )->get( '/tasks/{id}',
        [TaskController::class, 'show']
    );

    Route::middleware( usingSanctum )->post( '/tasks/create',
        [TaskController::class, 'store']
    );

    Route::middleware( usingSanctum )->patch( '/tasks/update',
        [TaskController::class, 'update']
    );

    Route::middleware( usingSanctum )->delete( '/tasks/delete/{id}',
        [TaskController::class, 'destroy']
    );
?>
