<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;


    Route::get( '/accounts/{id}',
        function( Request $request )
        {
            return $request->user();
        }
    );


    Route::middleware( middlewareSanctum )->get( '/accounts/me',
        function( Request $request )
        {
                return $request->user();
        }
    );


    Route::post( '/accounts/create',
        function( Request $request )
        {
            return $request->user();
        }
    );

    Route::middleware( middlewareSanctum )->patch( '/accounts/update',
        function( Request $request )
        {
                return $request->user();
        }
    );

    Route::middleware( middlewareSanctum )->delete( '/accounts/delete/{id}',
        function( Request $request )
        {
            return $request->user();
        }
    );

?>
