<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\JsonResponse;

    use App\Http\Requests\access\AccessSettingRequest;
    use App\Http\Requests\store\StoreSettingRequest;
    use App\Http\Requests\update\UpdateSettingRequest;
    use OpenApi\Attributes
      	as OA;


    #[OA\Schema( title: 'Setting Controller',
                 description: '',
                 type: 'controller' )]
    class SettingController
        extends Controller
    {

        public function index( AccessSettingRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }

        public function store( StoreSettingRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }


        public function show( AccessSettingRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }

        public function update( UpdateSettingRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }


        public function destroy( AccessSettingRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }
    }
?>
