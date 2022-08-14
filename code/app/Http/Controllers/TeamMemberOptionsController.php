<?php
    namespace App\Http\Controllers;

    use App\Models\TeamMemberOptionsModel;
    use App\Http\Requests\StoreTeamMemberOptionModelRequest;
    use App\Http\Requests\UpdateTeamMemberOptionsModelRequest;


    class TeamMemberOptionsController
        extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \App\Http\Requests\StoreTeamMemberOptionModelRequest  $request
         * @return \Illuminate\Http\Response
         */
        public function store(StoreTeamMemberOptionModelRequest $request)
        {
            //
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\Models\TeamMemberOptionsModel  $teamMemberOptionsModel
         * @return \Illuminate\Http\Response
         */
        public function show(TeamMemberOptionsModel $teamMemberOptionsModel)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \App\Http\Requests\UpdateTeamMemberOptionsModelRequest  $request
         * @param  \App\Models\TeamMemberOptionsModel  $teamMemberOptionsModel
         * @return \Illuminate\Http\Response
         */
        public function update(UpdateTeamMemberOptionsModelRequest $request, TeamMemberOptionsModel $teamMemberOptionsModel)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\TeamMemberOptionsModel  $teamMemberOptionsModel
         * @return \Illuminate\Http\Response
         */
        public function destroy(TeamMemberOptionsModel $teamMemberOptionsModel)
        {
            //
        }
    }
?>
