<?php

namespace App\Http\Controllers;

use App\Models\settingsModel;
use App\Http\Requests\StoresettingsModelRequest;
use App\Http\Requests\UpdatesettingsModelRequest;

class settingsController extends Controller
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
     * @param  \App\Http\Requests\StoresettingsModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresettingsModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\settingsModel  $settingsModel
     * @return \Illuminate\Http\Response
     */
    public function show(settingsModel $settingsModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesettingsModelRequest  $request
     * @param  \App\Models\settingsModel  $settingsModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesettingsModelRequest $request, settingsModel $settingsModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\settingsModel  $settingsModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(settingsModel $settingsModel)
    {
        //
    }
}
