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

    use App\Http\Controllers\Controller;use App\Http\Requests\access\AccessTaskRequest;use App\Http\Requests\store\StoreTaskRequest;use App\Http\Requests\update\UpdateTaskRequest;use App\Models\Projects\TaskModel;use Illuminate\Http\JsonResponse;use Illuminate\Support\Carbon;use Illuminate\Support\Str;use OpenApi\Attributes as OA;


    #[OA\Schema( title: 'Task Controller',
                 description: '',
                 type: 'controller' )]
    class TaskController
        extends Controller
    {
        #[OA\Get( path: '/api/1.0.0/tasks/index',
                  tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'bearer token - has to be included in the header of the request',
                        in: 'header' )]
        public function index( AccessTaskRequest $request ): JsonResponse
        {
            //
            $indexed = TaskModel::where( 'author_id', '=', $request->user()->id )->get();

            $length = count( $indexed );
            $idx = null;

            $res = [];

            if( 0 < $length )
            {
                for( $idx = 0;
                     $idx < $length;
                     $idx ++ )
                {
                    $current = $indexed[$idx];

                    $sorted =
                    [
                        'id' => $current->id,
                        'title' => $current->title,
                        'deadline' => $current->deadline
                    ];

                    array_push($res, $sorted );
                }
            }

            return response()->json( $res );
        }


        #[OA\Post( path: '/api/1.0.0/tasks/create',
                   tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'bearer token - has to be included in the header of the request',
                        in: 'header' )]
        public function store( StoreTaskRequest $request ): JsonResponse
        {
            //
            $inpKeys = $request->all();
            $id = $request->user()->id;

            $model = TaskModel::create(
                [
                    'title'         => $inpKeys[ 'title' ],
                    'description'   => $inpKeys[ 'description' ],
                    'author_id'     => $id,
                    'project_id'    => $inpKeys[ 'project_id' ],
                    'deadline'      => Carbon::parse( $inpKeys[ 'deadline' ] )->toDateTimeString()
                ]
            );

            return response()->json( $model );
        }


        #[OA\Get( path: '/api/1.0.0/tasks/groups/identity/{id}',
                  tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'bearer token - has to be included in the header of the request',
                        in: 'header' )]
        public function show( AccessTaskRequest $request ): JsonResponse
        {
            $model = TaskModel::where( 'id', '=', $request->id )->firstOrFail();

            return response()->json( $model );
        }


        #[OA\Patch( path: '/api/1.0.0/tasks/groups/update',
                    tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'bearer token - has to be included in the header of the request',
                        in: 'header' )]
        public function update( UpdateTaskRequest $request ): JsonResponse
        {
            //
            $inpKeys = $request->all();
            $onChange = false;

            $model = TaskModel::where( 'id', '=', $inpKeys[ 'id' ] )->firstOrFail();

            if($request->has('title')&& isset($inpKeys['title']))
            {
                $model->title = $inpKeys['title'];
                $onChange = true;
            }

            if($request->has('description')&& isset($inpKeys['description']))
            {
                $model->title = $inpKeys['description'];
                $onChange = true;
            }

            if($request->has('deadline') && isset($inpKeys['deadline']))
            {
                $model->title = $inpKeys['deadline'];
                $onChange = true;
            }

            if( $onChange )
            {
                $model->save();
            }

            return response()->json( $model );
        }


        #[OA\Delete( path: '/api/1.0.0/tasks/groups/delete/{id}',
                     tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'bearer token - has to be included in the header of the request',
                        in: 'header' )]
        public function destroy( AccessTaskRequest $request ): JsonResponse
        {
            //
            $inpKeys = $request->all();

            $id = $request->user()->id;

            $model = TaskModel::where( 'id', '=', $request->id )->firstOrFail();

            if( $request->has( 'delete' ) &&
                Str::lower( $inpKeys[ 'delete' ] ) == 'yes' )
            {
                if( $model->author_id == $id )
                {
                    $model->delete();
                    return response()->json( [ 'status' => 'successful' ] );
                }
            }

            return response()->json( [ 'status' => 'failed' ] );
        }
    }
?>
