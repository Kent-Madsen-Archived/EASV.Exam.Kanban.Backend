<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\TaskGroupController
            as TaskGroupController;

    use App\cfg;
    $secure = cfg::$secure;


    Route::middleware( $secure )->get( '/tasks/group/{id}',
        [TaskGroupController::class, 'show']
    );

    Route::middleware( $secure )->post( '/tasks/group/create',
        [TaskGroupController::class, 'store']
    );

    Route::middleware( $secure )->patch( '/tasks/group/update',
        [TaskGroupController::class, 'update']
    );

    Route::middleware( $secure )->delete( '/tasks/group/delete/{id}',
        [TaskGroupController::class, 'destroy']
    );
?>
