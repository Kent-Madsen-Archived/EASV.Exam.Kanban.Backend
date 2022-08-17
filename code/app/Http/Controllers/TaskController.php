<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\access\AccessTaskRequest;
    use App\Http\Requests\store\StoreTaskRequest;
    use App\Http\Requests\update\UpdateTaskRequest;
    use Illuminate\Http\JsonResponse;


    class TaskController
        extends Controller
    {

        public function index( AccessTaskRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }

        public function store( StoreTaskRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }

        public function show( AccessTaskRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }

        public function update( UpdateTaskRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }


        public function destroy( AccessTaskRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }
    }
?>
