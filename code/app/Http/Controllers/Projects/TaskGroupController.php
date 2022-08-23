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
    namespace App\Http\Controllers\Projects;

    use App\Http\Controllers\Controller;use App\Http\Requests\access\AccessTaskGroupRequest;use App\Http\Requests\store\StoreTaskGroupRequest;use App\Http\Requests\update\UpdateTaskGroupRequest;use Illuminate\Http\JsonResponse;use OpenApi\Attributes as OA;


    #[OA\Schema( title: 'Task Group Controller',
                 description: '',
                 type: 'controller' )]
    class TaskGroupController
        extends Controller
    {
        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public function index( AccessTaskGroupRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        #[OA\Post( path: '/api/1.0.0/tasks/groups/update',
                   tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public function store( StoreTaskGroupRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        #[OA\Get( path: '/api/1.0.0/tasks/groups/identity/{id}',
                  tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public function show( AccessTaskGroupRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        #[OA\Patch( path: '/api/1.0.0/tasks/groups/update',
                    tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public function update( UpdateTaskGroupRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        #[OA\Delete( path: '/api/1.0.0/tasks/groups/delete/{id}',
                     tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public function destroy( AccessTaskGroupRequest $request )
        {
            //
            return response()->json('');
        }
    }
?>
