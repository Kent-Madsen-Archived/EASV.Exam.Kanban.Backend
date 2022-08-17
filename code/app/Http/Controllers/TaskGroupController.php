<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\access\AccessTaskGroupRequest;
    use App\Http\Requests\store\StoreTaskGroupRequest;
    use App\Http\Requests\update\UpdateTaskGroupRequest;
    use App\Models\TaskGroupModel;


    class TaskGroupController
        extends Controller
    {

        public function index( AccessTaskGroupRequest $request )
        {
            //
        }

        public function store( StoreTaskGroupRequest $request )
        {
            //
        }


        public function show( AccessTaskGroupRequest $request,
                              TaskGroupModel $taskGroupModel )
        {
            //
        }


        public function update( UpdateTaskGroupRequest $request,
                                TaskGroupModel $taskGroupModel )
        {
            //
        }


        public function destroy( AccessTaskGroupRequest $request,
                                 TaskGroupModel $taskGroupModel )
        {
            //
        }
    }
?>
