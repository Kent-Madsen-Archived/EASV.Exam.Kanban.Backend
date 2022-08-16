<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\store\StoreTeamMemberOptionModelRequest;use App\Http\Requests\update\UpdateTeamMemberOptionsModelRequest;use App\Models\TeamMemberOptionsModel;


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
