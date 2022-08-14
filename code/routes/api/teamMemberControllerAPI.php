<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\TeamMemberController
            as TeamMemberController;


    Route::middleware( middlewareSanctum )->get( '/team/member/{id}',
        [TeamMemberController::class, 'show']
    );

    Route::middleware( middlewareSanctum )->post( '/team/member/create',
        [TeamMemberController::class, 'store']
    );

    Route::middleware( middlewareSanctum )->patch( '/team/member/update',
        [TeamMemberController::class, 'update']
    );

    Route::middleware( middlewareSanctum )->delete( '/team/member/delete/{id}',
        [TeamMemberController::class, 'destroy']
    );
?>
