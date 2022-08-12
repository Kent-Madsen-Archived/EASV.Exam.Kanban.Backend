<?php

namespace App\Http\Controllers;

use App\Models\SettingModel;
use App\Http\Requests\StoreSettingModelRequest;
use App\Http\Requests\UpdateSettingModelRequest;

class settingController extends Controller
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
     * @param  \App\Http\Requests\StoreSettingModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSettingModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SettingModel  $settingsModel
     * @return \Illuminate\Http\Response
     */
    public function show(SettingModel $settingsModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSettingModelRequest  $request
     * @param  \App\Models\SettingModel  $settingsModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSettingModelRequest $request, SettingModel $settingsModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SettingModel  $settingsModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SettingModel $settingsModel)
    {
        //
    }
}
