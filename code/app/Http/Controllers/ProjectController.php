<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\access\AccessProjectRequest;
    use App\Http\Requests\store\StoreProjectRequest;
    use App\Http\Requests\update\UpdateProjectRequest;
    use App\Models\ProjectModel;


    class ProjectController
        extends Controller
    {

        public function index( AccessProjectRequest $request )
        {
            //
        }

        public function store( StoreProjectRequest $request )
        {
            //
        }

        public function show( AccessProjectRequest $request,
                              ProjectModel $projectModel )
        {
            //
        }

        public function update( UpdateProjectRequest $request,
                                ProjectModel $projectModel )
        {
            //
        }

        public function destroy( ProjectModel $projectModel )
        {
            //
        }
    }
?>
