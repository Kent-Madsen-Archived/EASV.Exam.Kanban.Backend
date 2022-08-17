<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\TeamMemberOptionController
        as TeamMemberOptionController;

    use App\cfg;
    $secure = cfg::$secure;


    Route::middleware( $secure )->get( cfg::versions['v1'] . '/teams/members/options/identity/{id}',
        [TeamMemberOptionController::class, 'show']
    );

    Route::middleware( $secure )->post( cfg::versions['v1'] . '/teams/members/options/create',
        [TeamMemberOptionController::class, 'store']
    );

    Route::middleware( $secure )->patch( cfg::versions['v1'] . '/teams/members/options/update',
        [TeamMemberOptionController::class, 'update']
    );

    Route::middleware( $secure )->delete( cfg::versions['v1'] . '/teams/members/options/delete/{id}',
        [TeamMemberOptionController::class, 'destroy']
    );
?>
