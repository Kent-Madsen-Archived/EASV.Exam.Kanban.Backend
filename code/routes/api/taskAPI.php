<?php
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;


    Route::middleware( middlewareSanctum )->get( '/tasks/{id}',
        function( Request $request )
        {
            return $request->user();
        }
    );

    Route::middleware( middlewareSanctum )->post( '/tasks/create',
        function( Request $request )
        {
            return $request->user();
        }
    );

    Route::middleware( middlewareSanctum )->patch( '/tasks/update',
        function( Request $request )
        {
            return $request->user();
        }
    );

    Route::middleware( middlewareSanctum )->delete( '/tasks/delete/{id}',
        function( Request $request )
        {
            return $request->user();
        }
    );
?>
