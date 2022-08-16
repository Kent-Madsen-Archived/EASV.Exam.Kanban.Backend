<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\store\StoreProjectModelConfigurationModelRequest;
    use App\Http\Requests\update\UpdateProjectModelConfigurationModelRequest;
    use App\Models\ProjectModelConfigurationModel;

    class ProjectModelConfigurationModelController
        extends Controller
    {
        public function index()
        {
            //
        }

        public function store( StoreProjectModelConfigurationModelRequest $request )
        {
            //
        }

        public function show( ProjectModelConfigurationModel $projectModelConfigurationModel )
        {
            //
        }


        public function update( UpdateProjectModelConfigurationModelRequest $request,
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
