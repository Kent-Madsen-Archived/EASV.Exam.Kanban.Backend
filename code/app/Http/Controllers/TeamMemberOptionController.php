<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\store\StoreTeamMemberOptionRequest;
    use App\Http\Requests\update\UpdateTeamMemberOptionsModelRequest;
    use App\Models\TeamMemberOptionsModel;


    class TeamMemberOptionController
        extends Controller
    {

        public function index()
        {
            //
        }


        public function store( StoreTeamMemberOptionRequest $request )
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
