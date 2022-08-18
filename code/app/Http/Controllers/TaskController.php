<?php
    namespace App\Http\Controllers;

    use Illuminate\Support\Carbon;

    use App\Models\TaskModel;
    use Illuminate\Http\JsonResponse;
    use App\Http\Requests\access\AccessTaskRequest;
    use App\Http\Requests\store\StoreTaskRequest;
    use App\Http\Requests\update\UpdateTaskRequest;use Illuminate\Support\Str;


    class TaskController
        extends Controller
    {

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
