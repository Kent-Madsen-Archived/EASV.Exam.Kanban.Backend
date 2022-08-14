<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;


    Route::middleware( middlewareSanctum )->get( '/settings/{id}',
        function( Request $request )
        {
            return $request->user();
        }
    );

    Route::middleware( middlewareSanctum )->post( '/settings/create',
        function( Request $request )
        {
            return $request->user();
        }
    );

    Route::middleware( middlewareSanctum )->patch( '/settings/update',
        function( Request $request )
        {
            return $request->user();
        }
    );

    Route::middleware( middlewareSanctum )->delete( '/settings/delete/{id}',
        function( Request $request )
        {
            return $request->user();
        }
    );
?>
