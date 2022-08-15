<?php
    namespace App\Http\Controllers;

    use App\Models\TaskModel;
    use App\Http\Requests\StoreTaskModelRequest;
    use App\Http\Requests\UpdateTaskModelRequest;


    class TaskController
        extends Controller
    {

        public function index()
        {
            //
        }

        public function store( StoreTaskModelRequest $request )
        {
            //
        }

        public function show( TaskModel $taskModel )
        {
            //
        }

        public function update( UpdateTaskModelRequest $request,
                                TaskModel $taskModel )
        {
            //
        }


        public function destroy( TaskModel $taskModel )
        {
            //
        }
}
?>
