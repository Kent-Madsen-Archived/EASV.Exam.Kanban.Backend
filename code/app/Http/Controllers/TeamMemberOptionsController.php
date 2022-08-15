<?php
    namespace App\Http\Controllers;

    use App\Models\TeamMemberOptionsModel;
    use App\Http\Requests\StoreTeamMemberOptionModelRequest;
    use App\Http\Requests\UpdateTeamMemberOptionsModelRequest;


    class TeamMemberOptionsController
        extends Controller
    {

        public function index()
        {
            //
        }


        public function store( StoreTeamMemberOptionModelRequest $request )
        {
            //
        }


        public function show( TeamMemberOptionsModel $teamMemberOptionsModel )
        {
            //
        }


        public function update( UpdateTeamMemberOptionsModelRequest $request,
                                TeamMemberOptionsModel $teamMemberOptionsModel )
        {
            //
        }


        public function destroy( TeamMemberOptionsModel $teamMemberOptionsModel )
        {
            //
        }
    }
?>
