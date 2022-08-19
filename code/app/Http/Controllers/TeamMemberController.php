<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\JsonResponse;

    use App\Http\Requests\access\AccessTeamMemberRequest;
    use App\Http\Requests\store\StoreTeamMemberRequest;
    use App\Http\Requests\update\UpdateTeamMemberRequest;

    use OpenApi\Attributes
        as OA;


    #[OA\Schema( title: 'Team Member Controller',
                 description: '',
                 type: 'controller' )]
    class TeamMemberController
        extends Controller
    {

        public function index( AccessTeamMemberRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        public function store( StoreTeamMemberRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        public function show( AccessTeamMemberRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        public function update( UpdateTeamMemberRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }



        public function destroy( AccessTeamMemberRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }
    }
?>
