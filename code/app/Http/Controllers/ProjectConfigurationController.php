<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\access\AccessProjectConfigurationRequest;
    use App\Http\Requests\store\StoreProjectConfigurationRequest;
    use App\Http\Requests\update\UpdateProjectConfigurationRequest;

    use App\Models\ProjectConfigurationModel;


    class ProjectConfigurationController
        extends Controller
    {
        public function index( AccessProjectConfigurationRequest $request )
        {
            //
        }

        public function store( StoreProjectConfigurationRequest $request )
        {
            //
        }

        public function show( AccessProjectConfigurationRequest $request,
                              ProjectConfigurationModel $projectModelConfigurationModel )
        {
            //
        }


        public function update( UpdateProjectConfigurationRequest $request,
                                ProjectConfigurationModel $projectModelConfigurationModel )
        {
            //
        }


        public function destroy( AccessProjectConfigurationRequest $request,
                                 ProjectConfigurationModel $projectModelConfigurationModel )
        {
            //
        }
    }
?>
