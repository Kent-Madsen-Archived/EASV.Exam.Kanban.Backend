<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\JsonResponse;

    use App\Http\Requests\access\AccessTaskGroupRequest;
    use App\Http\Requests\store\StoreTaskGroupRequest;
    use App\Http\Requests\update\UpdateTaskGroupRequest;


    class TaskGroupController
        extends Controller
    {

        public function index( AccessTaskGroupRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }

        public function store( StoreTaskGroupRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        public function show( AccessTaskGroupRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        public function update( UpdateTaskGroupRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        public function destroy( AccessTaskGroupRequest $request )
        {
            //
            return response()->json('');
        }
    }
?>
