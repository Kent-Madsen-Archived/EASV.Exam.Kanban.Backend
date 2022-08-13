<?php
    namespace App\Http\Controllers;

    use App\Models\ProjectModel;
    use App\Http\Requests\StoreProjectModelRequest;
    use App\Http\Requests\UpdateProjectModelRequest;

    class ProjectController
        extends Controller
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
         * @param  \App\Http\Requests\StoreProjectModelRequest  $request
         * @return \Illuminate\Http\Response
         */
        public function store(StoreProjectModelRequest $request)
        {
            //
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\Models\ProjectModel  $projectModel
         * @return \Illuminate\Http\Response
         */
        public function show(ProjectModel $projectModel)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \App\Http\Requests\UpdateProjectModelRequest  $request
         * @param  \App\Models\ProjectModel  $projectModel
         * @return \Illuminate\Http\Response
         */
        public function update(UpdateProjectModelRequest $request, ProjectModel $projectModel)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\ProjectModel  $projectModel
         * @return \Illuminate\Http\Response
         */
        public function destroy(ProjectModel $projectModel)
        {
            //
        }
    }
?>
