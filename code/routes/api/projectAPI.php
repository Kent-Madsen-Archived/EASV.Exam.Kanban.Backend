<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\ProjectController
        as ProjectController;

    use App\cfg;
    $secure = cfg::$secure;


    Route::middleware( $secure )->get( '/projects/{id}',
        [ProjectController::class, 'show']
    );

    Route::middleware( $secure )->post( '/projects/create',
        [ProjectController::class, 'store']
    );

    Route::middleware( $secure )->patch( '/projects/update',
        [ProjectController::class, 'update']
    );

    Route::middleware( $secure )->delete( '/projects/delete/{id}',
        [ProjectController::class, 'destroy']
    );
?>
