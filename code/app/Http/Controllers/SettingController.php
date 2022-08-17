<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\access\AccessSettingRequest;
    use App\Http\Requests\store\StoreSettingRequest;
    use App\Http\Requests\update\UpdateSettingRequest;
    use App\Models\SettingModel;


    class SettingController
        extends Controller
    {

        public function index( AccessSettingRequest $request )
        {
            //
        }

        public function store( StoreSettingRequest $request )
        {
            //
        }


        public function show( AccessSettingRequest $request,
                              SettingModel $settingsModel )
        {
            //
        }

        public function update( UpdateSettingRequest $request,
                                SettingModel $settingsModel )
        {
            //
        }


        public function destroy( AccessSettingRequest $request,
                                 SettingModel $settingsModel )
        {
            //
        }
    }
?>
