<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\TeamMemberOptionsController
            as TeamMemberOptionsController;


    Route::middleware( middlewareSanctum )->get( '/team/member/options/{id}',
        [TeamMemberOptionsController::class, 'show']
    );

    Route::middleware( middlewareSanctum )->post( '/team/member/options/create',
        [TeamMemberOptionsController::class, 'store']
    );

    Route::middleware( middlewareSanctum )->patch( '/team/member/options/update',
        [TeamMemberOptionsController::class, 'update']
    );

    Route::middleware( middlewareSanctum )->delete( '/team/member/options/delete/{id}',
        [TeamMemberOptionsController::class, 'destroy']
    );
?>
