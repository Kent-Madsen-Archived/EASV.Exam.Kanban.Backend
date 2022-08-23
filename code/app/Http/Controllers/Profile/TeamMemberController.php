<?php
    /**
     * Author: Kent Madsen
     * Version: 1.0.0
     * Copyright: 2022, Kent vejrup Madsen
     *
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Code of Conduct: https://github.com/KentVejrupMadsen/EASV.Exam.Kanban.Backend/blob/main/code_of_conduct.md
     *
     * License: https://github.com/KentVejrupMadsen/EASV.Exam.Kanban.Backend/blob/main/license.md
     */
    namespace App\Http\Controllers\Profile;

    use App\Http\Controllers\Controller;

    use App\Http\Requests\access\AccessTeamMemberRequest;
    use App\Http\Requests\store\StoreTeamMemberRequest;
    use App\Http\Requests\update\UpdateTeamMemberRequest;

    use Illuminate\Http\JsonResponse;

    use OpenApi\Attributes
        as OA;


    #[OA\Schema( title: 'Team Member Controller',
                 description: '',
                 type: 'controller' )]
    class TeamMemberController
        extends Controller
    {
        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public function index( AccessTeamMemberRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        #[OA\Post( path: '/api/1.0.0/teams/members/create',
                   tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public function store( StoreTeamMemberRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        #[OA\Get( path: '/api/1.0.0/teams/members/identity/{id}',
                  tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public function show( AccessTeamMemberRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        #[OA\Patch( path: '/api/1.0.0/teams/members/update',
                    tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public function update( UpdateTeamMemberRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }


        #[OA\Delete( path: '/api/1.0.0/teams/members/delete',
                     tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public function destroy( AccessTeamMemberRequest $request ): JsonResponse
        {
            //
            return response()->json('');
        }
    }
?>
