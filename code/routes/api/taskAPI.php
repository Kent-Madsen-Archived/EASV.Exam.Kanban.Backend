<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\TaskController
        as TaskController;

    use App\cfg;
    $secure = cfg::$secure;

    Route::middleware( $secure )->get( '/tasks/{id}',
        [TaskController::class, 'show']
    );

    Route::middleware( $secure )->post( '/tasks/create',
        [TaskController::class, 'store']
    );

    Route::middleware( $secure )->patch( '/tasks/update',
        [TaskController::class, 'update']
    );

    Route::middleware( $secure )->delete( '/tasks/delete/{id}',
        [TaskController::class, 'destroy']
    );
?>
