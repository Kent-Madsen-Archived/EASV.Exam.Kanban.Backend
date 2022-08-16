<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\store\StoreTaskGroupRequest;
    use App\Http\Requests\update\UpdateTaskGroupRequest;
    use App\Models\TaskGroupModel;


    class TaskGroupController
        extends Controller
    {

        public function index()
        {
            //
        }

        public function store( StoreTaskGroupRequest $request )
        {
            //
        }


        public function show( TaskGroupModel $taskGroupModel )
        {
            //
        }


        public function update( UpdateTaskGroupRequest $request,
                                TaskGroupModel $taskGroupModel )
        {
            //
        }


        public function destroy( TaskGroupModel $taskGroupModel )
        {
            //
        }
    }
?>
