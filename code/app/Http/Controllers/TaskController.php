<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\access\AccessTaskRequest;
    use App\Http\Requests\store\StoreTaskRequest;
    use App\Http\Requests\update\UpdateTaskRequest;
    use App\Models\TaskModel;


    class TaskController
        extends Controller
    {

        public function index( AccessTaskRequest $request )
        {
            //
        }

        public function store( StoreTaskRequest $request )
        {
            //
        }

        public function show( AccessTaskRequest $request,
                              TaskModel $taskModel )
        {
            //
        }

        public function update( UpdateTaskRequest $request,
                                TaskModel $taskModel )
        {
            //
        }


        public function destroy( AccessTaskRequest $request,
                                 TaskModel $taskModel )
        {
            //
        }
    }
?>
