<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\store\StoreTeamMemberOptionRequest;
    use App\Http\Requests\update\UpdateTeamMemberOptionRequest;
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


        public function update( UpdateTeamMemberOptionRequest $request,
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
