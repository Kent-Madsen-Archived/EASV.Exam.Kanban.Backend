<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\access\AccessProjectConfigurationRequest;
    use App\Http\Requests\store\StoreProjectConfigurationRequest;
    use App\Http\Requests\update\UpdateProjectConfigurationRequest;
    use Illuminate\Http\JsonResponse;


    class ProjectConfigurationController
        extends Controller
    {
        public function index( AccessProjectConfigurationRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }

        public function store( StoreProjectConfigurationRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }

        public function show( AccessProjectConfigurationRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }


        public function update( UpdateProjectConfigurationRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }


        public function destroy( AccessProjectConfigurationRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }
    }
?>
