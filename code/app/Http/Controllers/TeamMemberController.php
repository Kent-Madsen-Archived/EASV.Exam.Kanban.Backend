<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\store\StoreTeamMemberRequest;
    use App\Http\Requests\update\UpdateTeamMemberRequest;
    use App\Models\TeamMemberModel;


    class TeamMemberController
        extends Controller
    {

        public function index()
        {
            //
        }


        public function store( StoreTeamMemberRequest $request )
        {
            //
        }


        public function show( TeamMemberModel $teamMemberModel )
        {
            //
        }


        public function update( UpdateTeamMemberRequest $request,
                                TeamMemberModel $teamMemberModel )
        {
            //
        }



        public function destroy( TeamMemberModel $teamMemberModel )
        {
            //
        }
    }
?>
