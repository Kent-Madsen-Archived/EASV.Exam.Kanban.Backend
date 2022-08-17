<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\access\AccessProjectRequest;
    use App\Http\Requests\store\StoreProjectRequest;
    use App\Http\Requests\update\UpdateProjectRequest;
    use Illuminate\Http\JsonResponse;


    class ProjectController
        extends Controller
    {

        public function index( AccessProjectRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }

        public function store( StoreProjectRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }

        public function show( AccessProjectRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }

        public function update( UpdateProjectRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }

        public function destroy( AccessProjectRequest $request ): JsonResponse
        {
            //

            return response()->json('');
        }
    }
?>
