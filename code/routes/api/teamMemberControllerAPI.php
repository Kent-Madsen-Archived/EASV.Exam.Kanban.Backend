<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\TeamMemberController
        as TeamMemberController;

    use App\cfg;
    $secure = cfg::$secure;


    Route::middleware( $secure )->get( cfg::versions['v1'] . '/teams/members/{id}',
        [TeamMemberController::class, 'show']
    );

    Route::middleware( $secure )->post( cfg::versions['v1'] . '/teams/members/create',
        [TeamMemberController::class, 'store']
    );

    Route::middleware( $secure )->patch( cfg::versions['v1'] . '/teams/members/update',
        [TeamMemberController::class, 'update']
    );

    Route::middleware( $secure )->delete( cfg::versions['v1'] . '/teams/members/delete/{id}',
        [TeamMemberController::class, 'destroy']
    );
?>
