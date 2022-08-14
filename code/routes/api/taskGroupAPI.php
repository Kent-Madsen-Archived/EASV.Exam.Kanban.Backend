<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\TaskGroupController
            as TaskGroupController;

    Route::middleware( middlewareSanctum )->get( '/tasks/group/{id}',
        [TaskGroupController::class, 'show']
    );

    Route::middleware( middlewareSanctum )->post( '/tasks/group/create',
        [TaskGroupController::class, 'store']
    );

    Route::middleware( middlewareSanctum )->patch( '/tasks/group/update',
        [TaskGroupController::class, 'update']
    );

    Route::middleware( middlewareSanctum )->delete( '/tasks/group/delete/{id}',
        [TaskGroupController::class, 'destroy']
    );
?>
