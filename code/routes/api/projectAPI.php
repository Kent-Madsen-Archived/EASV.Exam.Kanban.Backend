<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;


    Route::middleware( middlewareSanctum )->get( '/projects/{id}',
        function( Request $request )
        {
            return $request->user();
        }
    );

    Route::middleware( middlewareSanctum )->post( '/projects/create',
        function( Request $request )
        {
            return $request->user();
        }
    );

    Route::middleware( middlewareSanctum )->patch( '/projects/update',
        function( Request $request )
        {
            return $request->user();
        }
    );

    Route::middleware( middlewareSanctum )->delete( '/projects/delete/{id}',
        function( Request $request )
        {
            return $request->user();
        }
    );
?>
