<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectModelConfigurationModelRequest;
use App\Http\Requests\UpdateProjectModelConfigurationModelRequest;
use App\Models\ProjectModelConfigurationModel;

class ProjectModelConfigurationModelController extends Controller
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
     * @param  \App\Http\Requests\StoreProjectModelConfigurationModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectModelConfigurationModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectModelConfigurationModel  $projectModelConfigurationModel
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectModelConfigurationModel $projectModelConfigurationModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectModelConfigurationModelRequest  $request
     * @param  \App\Models\ProjectModelConfigurationModel  $projectModelConfigurationModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectModelConfigurationModelRequest $request, ProjectModelConfigurationModel $projectModelConfigurationModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectModelConfigurationModel  $projectModelConfigurationModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectModelConfigurationModel $projectModelConfigurationModel)
    {
        //
    }
}
