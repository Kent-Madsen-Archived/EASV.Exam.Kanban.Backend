<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\JsonResponse;

    use App\Http\Requests\access\AccessTaskGroupRequest;
    use App\Http\Requests\store\StoreTaskGroupRequest;
    use App\Http\Requests\update\UpdateTaskGroupRequest;

    use OpenApi\Attributes
        as OA;


    #[OA\Schema( title: 'Task Group Controller',
                 description: '',
                 type: 'controller' )]
    class TaskGroupController
        extends Controller
    {
        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        public function index( AccessTaskGroupRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        #[OA\Post( path: '/api/1.0.0/',
                   tags: [ '1.0.0', '' ] )]
        public function store( StoreTaskGroupRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        public function show( AccessTaskGroupRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        #[OA\Patch( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        public function update( UpdateTaskGroupRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        #[OA\Delete( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        public function destroy( AccessTaskGroupRequest $request )
        {
            //
            return response()->json('');
        }
    }
?>
