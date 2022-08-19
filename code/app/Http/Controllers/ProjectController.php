<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\JsonResponse;
    use Illuminate\Support\Str;

    use App\Models\ProjectModel;

    use App\Http\Requests\access\AccessProjectRequest;
    use App\Http\Requests\store\StoreProjectRequest;
    use App\Http\Requests\update\UpdateProjectRequest;

    use OpenApi\Attributes
        as OA;


    #[OA\Schema( title: 'Project Controller',
                 description: '',
                 type: 'controller' )]
    class ProjectController
        extends Controller
    {
        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        public function index( AccessProjectRequest $request ): JsonResponse
        {
            $projects = ProjectModel::where( 'creator_id', '=',  $request->user()->id )->get();

            $resp = [];

            $length = count( $projects );

            if( $length > 0 )
            {
                $idx = null;

                for( $idx = 0;
                     $idx < $length;
                     $idx++)
                {
                    $project = $projects[ $idx ];

                    $sorted =
                    [
                        "id" => $project->id,
                        "title" => $project->title,
                        "attributes" => $project->attributes
                    ];

                    array_push( $resp, $sorted );
                }
            }

            return response()->json( $resp );
        }


        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        public function store( StoreProjectRequest $request ): JsonResponse
        {
            $inpKeys = $request->all();
            $user = $request->user();

            $res = [];
            $id = null;

            if( $request->has( 'template_id' ) )
            {
                $templateId = $inpKeys[ 'template_id' ];
            }

            if( $request->has( 'creator_id' ) &&
                !is_null( $inpKeys[ 'creator_id' ] ) )
            {
                $id = $inpKeys[ 'creator_id' ];
            }
            else
            {
                $id = $user->id;
            }

            $model = ProjectModel::create(
                [
                    'title'         => $inpKeys[ 'title' ],
                    'description'   => $inpKeys[ 'description' ],
                    'creator_id'    => $id,
                    'attributes'    => $inpKeys[ 'attributes' ],
                    'template_id'   => $templateId
                ]
            );

            return response()->json( $model );
        }


        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        public function show( AccessProjectRequest $request ): JsonResponse
        {
            $project = ProjectModel::where( 'id', '=',  $request->id )->firstOrFail();
            return response()->json( $project );
        }


        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        public function update( UpdateProjectRequest $request ): JsonResponse
        {
            $inpKeys = $request->all();

            $project = ProjectModel::where( 'id', '=', $inpKeys[ 'id' ] )->firstOrFail();
            $onChange = false;

            if( $project->creator_id == $request->user()->id )
            {
                if( $request->has( 'title' ) )
                {
                    $project->title = $inpKeys[ 'title' ];
                    $onChange = true;
                }

                if( $request->has( 'description' ) )
                {
                    $project->description = $inpKeys[ 'description' ];
                    $onChange = true;

                }

                if( $request->has( 'attributes' ) )
                {
                    $project->attributes = $inpKeys[ 'attributes' ];
                    $onChange = true;
                }
            }

            if( $onChange )
            {
                $project->save();
            }

            return response()->json( $project );
        }


        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        public function destroy( AccessProjectRequest $request ): JsonResponse
        {
            $isYes = $request->has( 'delete' );

            if( $isYes &&
                Str::lower( $request->get( 'delete' ) ) == 'yes')
            {
                try
                {
                    $project = ProjectModel::where( 'id', '=', $request->id )->firstOrFail();
                    $project->delete();

                    return response()->json( [ 'status' => 'successful' ] );
                }
                catch( \Exception $exception )
                {

                }
            }

            return response()->json( [ 'status' => 'failed' ] );
        }
    }
?>
