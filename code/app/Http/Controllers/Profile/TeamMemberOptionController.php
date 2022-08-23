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

    use App\Http\Controllers\Controller;use App\Http\Requests\access\AccessTeamMemberOptionRequest;use App\Http\Requests\store\StoreTeamMemberOptionRequest;use App\Http\Requests\update\UpdateTeamMemberOptionRequest;use Illuminate\Http\JsonResponse;use OpenApi\Attributes as OA;


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
