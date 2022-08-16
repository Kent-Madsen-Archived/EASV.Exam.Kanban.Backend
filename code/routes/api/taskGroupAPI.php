<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\TaskGroupController
            as TaskGroupController;

    use App\cfg;
    $secure = cfg::$secure;


    Route::middleware( $secure )->get( '/tasks/groups/{id}',
        [TaskGroupController::class, 'show']
    );

    Route::middleware( $secure )->post( '/tasks/groups/create',
        [TaskGroupController::class, 'store']
    );

    Route::middleware( $secure )->patch( '/tasks/groups/update',
        [TaskGroupController::class, 'update']
    );

    Route::middleware( $secure )->delete( '/tasks/groups/delete/{id}',
        [TaskGroupController::class, 'destroy']
    );
?>
