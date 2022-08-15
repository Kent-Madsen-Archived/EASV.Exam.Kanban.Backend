<?php
    namespace App\Http\Controllers;

    use App\Models\TaskGroupModel;
    use App\Http\Requests\StoreTaskGroupModelRequest;
    use App\Http\Requests\UpdateTaskGroupModelRequest;


    class TaskGroupController
        extends Controller
    {

        public function index()
        {
            //
        }

        public function store( StoreTaskGroupModelRequest $request )
        {
            //
        }


        public function show( TaskGroupModel $taskGroupModel )
        {
            //
        }


        public function update( UpdateTaskGroupModelRequest $request,
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
