<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\TaskGroupController
            as TaskGroupController;

    use App\cfg;
    $secure = cfg::$secure;


    Route::middleware( $secure )->get( cfg::versions['v1'] . '/tasks/groups/{id}',
        [TaskGroupController::class, 'show']
    );

    Route::middleware( $secure )->post( cfg::versions['v1'] . '/tasks/groups/create',
        [TaskGroupController::class, 'store']
    );

    Route::middleware( $secure )->patch( cfg::versions['v1'] . '/tasks/groups/update',
        [TaskGroupController::class, 'update']
    );

    Route::middleware( $secure )->delete( cfg::versions['v1'] . '/tasks/groups/delete/{id}',
        [TaskGroupController::class, 'destroy']
    );
?>
