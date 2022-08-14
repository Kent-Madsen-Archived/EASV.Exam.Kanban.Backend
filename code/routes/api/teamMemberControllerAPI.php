<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\TeamMemberController
            as TeamMemberController;


    Route::middleware( usingSanctum )->get( '/team/member/{id}',
        [TeamMemberController::class, 'show']
    );

    Route::middleware( usingSanctum )->post( '/team/member/create',
        [TeamMemberController::class, 'store']
    );

    Route::middleware( usingSanctum )->patch( '/team/member/update',
        [TeamMemberController::class, 'update']
    );

    Route::middleware( usingSanctum )->delete( '/team/member/delete/{id}',
        [TeamMemberController::class, 'destroy']
    );
?>
