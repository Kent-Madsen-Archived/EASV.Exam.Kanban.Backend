<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\store\StoreProjectConfigurationRequest;
    use App\Http\Requests\update\UpdateProjectConfigurationRequest;
    use App\Models\ProjectModelConfigurationModel;


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

        public function show( ProjectModelConfigurationModel $projectModelConfigurationModel )
        {
            //
        }


        public function update( UpdateProjectConfigurationRequest $request,
                                ProjectModelConfigurationModel $projectModelConfigurationModel )
        {
            //
        }


        public function destroy( ProjectModelConfigurationModel $projectModelConfigurationModel )
        {
            //
        }
    }
?>
