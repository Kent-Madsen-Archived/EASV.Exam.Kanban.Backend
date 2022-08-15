<?php
    namespace App\Http\Controllers;

    use App\Models\TeamMemberModel;
    use App\Http\Requests\StoreTeamMemberModelRequest;
    use App\Http\Requests\UpdateTeamMemberModelRequest;


    class TeamMemberController
        extends Controller
    {

        public function index()
        {
            //
        }


        public function store( StoreTeamMemberModelRequest $request )
        {
            //
        }


        public function show( TeamMemberModel $teamMemberModel )
        {
            //
        }


        public function update( UpdateTeamMemberModelRequest $request,
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
