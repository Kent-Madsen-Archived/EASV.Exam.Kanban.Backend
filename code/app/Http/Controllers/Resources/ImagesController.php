<?php
    /**
     * Author: Kent Madsen
     * Version: 1.0.0
     * Copyright: 2022, Kent vejrup Madsen
     *
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Code of Conduct: https://github.com/KentVejrupMadsen/EASV.Exam.Kanban.Backend/blob/main/code_of_conduct.md
     *
     * License: https://github.com/KentVejrupMadsen/EASV.Exam.Kanban.Backend/blob/main/license.md
     */
    namespace App\Http\Controllers\Resources;

    use Illuminate\Http\JsonResponse;

    use OpenApi\Attributes
        as OA;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\access\AccessImageRequest;
    use App\Http\Requests\store\StoreImageRequest;
    use App\Http\Requests\update\UpdateImageRequest;


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

        public static function generateRoutes()
        {

        }
    }
?>
