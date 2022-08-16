<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\store\StoreSettingModelRequest;use App\Http\Requests\update\UpdateSettingModelRequest;use App\Models\SettingModel;


    class SettingController
        extends Controller
    {

        public function index()
        {
            //
        }

        public function store( StoreSettingModelRequest $request )
        {
            //
        }


        public function show( SettingModel $settingsModel )
        {
            //
        }

        public function update( UpdateSettingModelRequest $request,
                                SettingModel $settingsModel )
        {
            //
        }


        public function destroy( SettingModel $settingsModel )
        {
            //
        }
    }
?>
