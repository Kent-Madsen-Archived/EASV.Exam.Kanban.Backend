<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;


    Route::get( '/resources/images/{id}',
        function( Request $request )
        {
            return $request->user();
        }
    );

    Route::middleware( middlewareSanctum )->post( '/resources/images/create',
        function( Request $request )
        {
            return $request->user();
        }
    );

    Route::middleware( middlewareSanctum )->patch( '/resources/images/update',
        function( Request $request )
        {
            return $request->user();
        }
    );

    Route::middleware( middlewareSanctum )->delete( '/resources/images/delete/{id}',
        function( Request $request )
        {
            return $request->user();
        }
    );
?>
