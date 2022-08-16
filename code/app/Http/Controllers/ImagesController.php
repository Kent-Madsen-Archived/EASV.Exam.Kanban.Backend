<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\store\StoreImageModelRequest;
    use App\Http\Requests\update\UpdateImageModelRequest;
    use App\Models\ImageModel;


    class ImagesController
        extends Controller
    {
        public function index()
        {
            //
        }

        public function store( StoreImageModelRequest $request )
        {
            //
        }

        public function show( ImageModel $imageModel )
        {
            //
        }


        public function update( UpdateImageModelRequest $request,
                                ImageModel $imageModel )
        {
            //
        }


        public function destroy( ImageModel $imageModel )
        {
            //
        }
    }
?>
