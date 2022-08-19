<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\TaskController
        as TaskController;

    use App\cfg;
    $secure = cfg::$secure;

    Route::middleware( $secure )->get( cfg::versions[ 'v1' ] . '/tasks/index',
        [TaskController::class, 'index']
    );

    Route::middleware( $secure )->get( cfg::versions[ 'v1' ] . '/tasks/identity/{id}',
        [TaskController::class, 'show']
    );


    Route::middleware( $secure )->post( cfg::versions['v1'] . '/tasks/create',
        [TaskController::class, 'store']
    );

    Route::middleware( $secure )->patch( cfg::versions['v1'] . '/tasks/update',
        [TaskController::class, 'update']
    );

    Route::middleware( $secure )->delete( cfg::versions['v1'] . '/tasks/delete/{id}',
        [TaskController::class, 'destroy']
    );
?>
