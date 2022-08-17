<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\access\AccessTeamMemberOptionRequest;use App\Http\Requests\store\StoreTeamMemberOptionRequest;
    use App\Http\Requests\update\UpdateTeamMemberOptionRequest;
    use App\Models\TeamMemberOptionsModel;


    class TeamMemberOptionController
        extends Controller
    {

        public function index(AccessTeamMemberOptionRequest $request)
        {
            //
        }


        public function store( StoreTeamMemberOptionRequest $request )
        {
            //
        }


        public function show( AccessTeamMemberOptionRequest $request,
                              TeamMemberOptionsModel $teamMemberOptionsModel )
        {
            //
        }


        public function update( UpdateTeamMemberOptionRequest $request,
                                TeamMemberOptionsModel $teamMemberOptionsModel )
        {
            //
        }


        public function destroy( AccessTeamMemberOptionRequest $request,
                                 TeamMemberOptionsModel $teamMemberOptionsModel )
        {
            //
        }
    }
?>
