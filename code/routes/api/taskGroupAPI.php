<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\TaskGroupController
            as TaskGroupController;


    Route::middleware( usingSanctum )->get( '/tasks/group/{id}',
        [TaskGroupController::class, 'show']
    );

    Route::middleware( usingSanctum )->post( '/tasks/group/create',
        [TaskGroupController::class, 'store']
    );

    Route::middleware( usingSanctum )->patch( '/tasks/group/update',
        [TaskGroupController::class, 'update']
    );

    Route::middleware( usingSanctum )->delete( '/tasks/group/delete/{id}',
        [TaskGroupController::class, 'destroy']
    );
?>
