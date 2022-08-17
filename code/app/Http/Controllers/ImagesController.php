<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\access\AccessImageRequest;
    use App\Http\Requests\store\StoreImageRequest;
    use App\Http\Requests\update\UpdateImageRequest;
    use App\Models\ImageModel;
    use Illuminate\Http\JsonResponse;


    class ImagesController
        extends Controller
    {
        public function index( AccessImageRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }

        public function store( StoreImageRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }

        public function show( AccessImageRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }


        public function update( UpdateImageRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }


        public function destroy( AccessImageRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }
    }
?>
