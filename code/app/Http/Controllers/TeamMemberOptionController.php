<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\JsonResponse;

    use App\Http\Requests\access\AccessTeamMemberOptionRequest;
    use App\Http\Requests\store\StoreTeamMemberOptionRequest;
    use App\Http\Requests\update\UpdateTeamMemberOptionRequest;

    use OpenApi\Attributes
        as OA;


    #[OA\Schema( title: 'Team Member Option Controller',
                 description: '',
                 type: 'controller' )]
    class TeamMemberOptionController
        extends Controller
    {
        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public function index( AccessTeamMemberOptionRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public function store( StoreTeamMemberOptionRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public function show( AccessTeamMemberOptionRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public function update( UpdateTeamMemberOptionRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public function destroy( AccessTeamMemberOptionRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }
    }
?>
