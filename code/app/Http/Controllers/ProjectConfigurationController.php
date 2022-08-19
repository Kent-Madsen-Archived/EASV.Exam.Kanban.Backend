<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\access\AccessProjectConfigurationRequest;
    use App\Http\Requests\store\StoreProjectConfigurationRequest;
    use App\Http\Requests\update\UpdateProjectConfigurationRequest;
    use Illuminate\Http\JsonResponse;

    use OpenApi\Attributes
        as OA;


    #[OA\Schema( title: 'Project Configuration Controller',
                 description: '',
                 type: 'controller' )]
    class ProjectConfigurationController
        extends Controller
    {
        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        public function index( AccessProjectConfigurationRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }


        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        public function store( StoreProjectConfigurationRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }


        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        public function show( AccessProjectConfigurationRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }


        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        public function update( UpdateProjectConfigurationRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }


        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        public function destroy( AccessProjectConfigurationRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }
    }
?>
