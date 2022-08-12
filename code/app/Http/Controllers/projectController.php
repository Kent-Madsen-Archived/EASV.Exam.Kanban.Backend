<?php

namespace App\Http\Controllers;

use App\Models\projectModel;
use App\Http\Requests\StoreprojectModelRequest;
use App\Http\Requests\UpdateprojectModelRequest;

class projectController extends Controller
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
     * @param  \App\Http\Requests\StoreprojectModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreprojectModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\projectModel  $projectModel
     * @return \Illuminate\Http\Response
     */
    public function show(projectModel $projectModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprojectModelRequest  $request
     * @param  \App\Models\projectModel  $projectModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateprojectModelRequest $request, projectModel $projectModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\projectModel  $projectModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(projectModel $projectModel)
    {
        //
    }
}
