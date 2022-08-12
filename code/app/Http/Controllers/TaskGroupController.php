<?php

    namespace App\Http\Controllers;

    use App\Models\TaskGroupModel;
    use App\Http\Requests\StoreTaskGroupModelRequest;
    use App\Http\Requests\UpdateTaskGroupModelRequest;

    class TaskGroupController extends Controller
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
         * @param  \App\Http\Requests\StoreTaskGroupModelRequest  $request
         * @return \Illuminate\Http\Response
         */
        public function store(StoreTaskGroupModelRequest $request)
        {
            //
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\Models\TaskGroupModel  $taskGroupModel
         * @return \Illuminate\Http\Response
         */
        public function show(TaskGroupModel $taskGroupModel)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \App\Http\Requests\UpdateTaskGroupModelRequest  $request
         * @param  \App\Models\TaskGroupModel  $taskGroupModel
         * @return \Illuminate\Http\Response
         */
        public function update(UpdateTaskGroupModelRequest $request, TaskGroupModel $taskGroupModel)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\TaskGroupModel  $taskGroupModel
         * @return \Illuminate\Http\Response
         */
        public function destroy(TaskGroupModel $taskGroupModel)
        {
            //
        }
    }
?>
