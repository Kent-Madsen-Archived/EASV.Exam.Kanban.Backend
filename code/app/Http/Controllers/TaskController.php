<?php
    namespace App\Http\Controllers;

    use App\Models\TaskModel;
    use App\Http\Requests\StoreTaskModelRequest;
    use App\Http\Requests\UpdateTaskModelRequest;


    class TaskController
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
         * @param  \App\Http\Requests\StoreTaskModelRequest  $request
         * @return \Illuminate\Http\Response
         */
        public function store(StoreTaskModelRequest $request)
        {
            //
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\Models\TaskModel  $taskModel
         * @return \Illuminate\Http\Response
         */
        public function show(TaskModel $taskModel)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \App\Http\Requests\UpdateTaskModelRequest  $request
         * @param  \App\Models\TaskModel  $taskModel
         * @return \Illuminate\Http\Response
         */
        public function update(UpdateTaskModelRequest $request, TaskModel $taskModel)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\TaskModel  $taskModel
         * @return \Illuminate\Http\Response
         */
        public function destroy(TaskModel $taskModel)
        {
            //
        }
}
?>
