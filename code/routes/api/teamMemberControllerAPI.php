<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\TeamMemberController
            as TeamMemberController;

    use App\cfg;
    $secure = cfg::$secure;

    Route::middleware( $secure )->get( '/team/member/{id}',
        [TeamMemberController::class, 'show']
    );

    Route::middleware( $secure )->post( '/team/member/create',
        [TeamMemberController::class, 'store']
    );

    Route::middleware( $secure )->patch( '/team/member/update',
        [TeamMemberController::class, 'update']
    );

    Route::middleware( $secure )->delete( '/team/member/delete/{id}',
        [TeamMemberController::class, 'destroy']
    );
?>
