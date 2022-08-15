<?php
    namespace App\Http\Controllers;

    use App\Models\ProjectModel;
    use App\Http\Requests\StoreProjectModelRequest;
    use App\Http\Requests\UpdateProjectModelRequest;


    class ProjectController
        extends Controller
    {

        public function index()
        {
            //
        }

        public function store( StoreProjectModelRequest $request )
        {
            //
        }

        public function show( ProjectModel $projectModel )
        {
            //
        }

        public function update( UpdateProjectModelRequest $request,
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
