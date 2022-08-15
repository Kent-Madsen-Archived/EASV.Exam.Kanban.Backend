<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\TeamMemberOptionsController
            as TeamMemberOptionsController;

    use App\cfg;
    $secure = cfg::$secure;


    Route::middleware( $secure )->get( '/team/member/options/{id}',
        [TeamMemberOptionsController::class, 'show']
    );

    Route::middleware( $secure )->post( '/team/member/options/create',
        [TeamMemberOptionsController::class, 'store']
    );

    Route::middleware( $secure )->patch( '/team/member/options/update',
        [TeamMemberOptionsController::class, 'update']
    );

    Route::middleware( $secure )->delete( '/team/member/options/delete/{id}',
        [TeamMemberOptionsController::class, 'destroy']
    );
?>
