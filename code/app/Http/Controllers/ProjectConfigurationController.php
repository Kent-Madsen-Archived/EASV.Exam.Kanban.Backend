<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\store\StoreProjectConfigurationRequest;
    use App\Http\Requests\update\UpdateProjectConfigurationRequest;
    use App\Models\ProjectConfigurationModel;


    class ProjectConfigurationController
        extends Controller
    {
        public function index()
        {
            //
        }

        public function store( StoreProjectConfigurationRequest $request )
        {
            //
        }

        public function show( ProjectConfigurationModel $projectModelConfigurationModel )
        {
            //
        }


        public function update( UpdateProjectConfigurationRequest $request,
                                ProjectConfigurationModel $projectModelConfigurationModel )
        {
            //
        }


        public function destroy( ProjectConfigurationModel $projectModelConfigurationModel )
        {
            //
        }
    }
?>
