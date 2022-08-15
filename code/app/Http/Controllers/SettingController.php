<?php
    namespace App\Http\Controllers;

    use App\Models\SettingModel;
    use App\Http\Requests\StoreSettingModelRequest;
    use App\Http\Requests\UpdateSettingModelRequest;


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
