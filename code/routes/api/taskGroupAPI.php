<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;


    Route::middleware( middlewareSanctum )->get( '/tasks/group/{id}',
        function( Request $request )
        {
            return $request->user();
        }
    );

    Route::middleware( middlewareSanctum )->post( '/tasks/group/create',
        function( Request $request )
        {
            return $request->user();
        }
    );

    Route::middleware( middlewareSanctum )->patch( '/tasks/group/update',
        function( Request $request )
        {
            return $request->user();
        }
    );

    Route::middleware( middlewareSanctum )->delete( '/tasks/group/delete/{id}',
        function( Request $request )
        {
            return $request->user();
        }
    );
?>
