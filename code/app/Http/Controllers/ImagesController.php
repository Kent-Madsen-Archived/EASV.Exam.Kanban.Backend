<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\JsonResponse;

    use App\Http\Requests\access\AccessImageRequest;
    use App\Http\Requests\store\StoreImageRequest;
    use App\Http\Requests\update\UpdateImageRequest;

    use App\Models\ImageModel;

    use OpenApi\Attributes
        as OA;

    #[OA\Schema( title: 'Image Controller',
                 description: '',
                 type: 'controller' )]
    class ImagesController
        extends Controller
    {
        #[OA\Get( path: '/api/1.0.0/resources/images/index',
                  tags: [ '1.0.0', '' ] )]
        public function index( AccessImageRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }


        #[OA\Post( path: '/api/1.0.0/resources/images/create',
                  tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'bearer token - has to be included in the header of the request',
                        in: 'header' )]
        public function store( StoreImageRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }


        #[OA\Get( path: '/api/1.0.0/resources/images/identity/{id}',
                  tags: [ '1.0.0', '' ] )]
        public function show( AccessImageRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }


        #[OA\Patch( path: '/api/1.0.0/resources/images/update',
                    tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'bearer token - has to be included in the header of the request',
                        in: 'header' )]
        public function update( UpdateImageRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }


        #[OA\Delete( path: '/api/1.0.0/resources/images/delete/{id}',
                     tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'bearer token - has to be included in the header of the request',
                        in: 'header' )]
        public function destroy( AccessImageRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }
    }
?>
