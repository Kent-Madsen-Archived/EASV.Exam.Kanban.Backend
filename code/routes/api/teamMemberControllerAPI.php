<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\TeamMemberController
            as TeamMemberController;

    use App\cfg;
    $secure = cfg::$secure;


    Route::middleware( $secure )->get( '/teams/members/{id}',
        [TeamMemberController::class, 'show']
    );

    Route::middleware( $secure )->post( '/teams/members/create',
        [TeamMemberController::class, 'store']
    );

    Route::middleware( $secure )->patch( '/teams/members/update',
        [TeamMemberController::class, 'update']
    );

    Route::middleware( $secure )->delete( '/teams/members/delete/{id}',
        [TeamMemberController::class, 'destroy']
    );
?>
