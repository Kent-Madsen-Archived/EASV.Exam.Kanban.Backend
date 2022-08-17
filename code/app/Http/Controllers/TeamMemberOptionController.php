<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\JsonResponse;

    use App\Http\Requests\access\AccessTeamMemberOptionRequest;
    use App\Http\Requests\store\StoreTeamMemberOptionRequest;
    use App\Http\Requests\update\UpdateTeamMemberOptionRequest;


    class TeamMemberOptionController
        extends Controller
    {

        public function index( AccessTeamMemberOptionRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        public function store( StoreTeamMemberOptionRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        public function show( AccessTeamMemberOptionRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        public function update( UpdateTeamMemberOptionRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        public function destroy( AccessTeamMemberOptionRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }
    }
?>
