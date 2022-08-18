<?php
    namespace App\Http\Controllers;

    use Illuminate\Support\Carbon;

    use App\Models\TaskModel;
    use Illuminate\Http\JsonResponse;
    use App\Http\Requests\access\AccessTaskRequest;
    use App\Http\Requests\store\StoreTaskRequest;
    use App\Http\Requests\update\UpdateTaskRequest;


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

        public function show( AccessTaskRequest $request ): JsonResponse
        {
            $model = TaskModel::where( 'id', '=', $request->id )->firstOrFail();

            return response()->json( $model );
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
