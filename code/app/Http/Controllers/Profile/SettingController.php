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

    use App\Http\Requests\access\AccessSettingRequest;
    use App\Http\Requests\store\StoreSettingRequest;
    use App\Http\Requests\update\UpdateSettingRequest;
    use Illuminate\Http\JsonResponse;
    use OpenApi\Attributes
        as OA;


    #[OA\Schema( title: 'Setting Controller',
                 description: '',
                 type: 'controller' )]
    class SettingController
        extends \App\Http\Controllers\Controller
    {
        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public function index( AccessSettingRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }


        #[OA\Post( path: '/api/1.0.0/',
                   tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public function store( StoreSettingRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }


        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public function show( AccessSettingRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }


        #[OA\Patch( path: '/api/1.0.0/',
                    tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public function update( UpdateSettingRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }


        #[OA\Delete( path: '/api/1.0.0/',
                     tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public function destroy( AccessSettingRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }
    }
?>
