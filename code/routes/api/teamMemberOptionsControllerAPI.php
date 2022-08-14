<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\TeamMemberOptionsController
            as TeamMemberOptionsController;


    Route::middleware( usingSanctum )->get( '/team/member/options/{id}',
        [TeamMemberOptionsController::class, 'show']
    );

    Route::middleware( usingSanctum )->post( '/team/member/options/create',
        [TeamMemberOptionsController::class, 'store']
    );

    Route::middleware( usingSanctum )->patch( '/team/member/options/update',
        [TeamMemberOptionsController::class, 'update']
    );

    Route::middleware( usingSanctum )->delete( '/team/member/options/delete/{id}',
        [TeamMemberOptionsController::class, 'destroy']
    );
?>
