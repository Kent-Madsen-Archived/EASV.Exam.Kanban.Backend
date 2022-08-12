<?php

namespace App\Http\Controllers;

use App\Models\TeamMemberModel;
use App\Http\Requests\StoreTeamMemberModelRequest;
use App\Http\Requests\UpdateTeamMemberModelRequest;

class TeamMemberController extends Controller
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
     * @param  \App\Http\Requests\StoreTeamMemberModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeamMemberModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeamMemberModel  $teamMemberModel
     * @return \Illuminate\Http\Response
     */
    public function show(TeamMemberModel $teamMemberModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeamMemberModelRequest  $request
     * @param  \App\Models\TeamMemberModel  $teamMemberModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeamMemberModelRequest $request, TeamMemberModel $teamMemberModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeamMemberModel  $teamMemberModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamMemberModel $teamMemberModel)
    {
        //
    }
}
