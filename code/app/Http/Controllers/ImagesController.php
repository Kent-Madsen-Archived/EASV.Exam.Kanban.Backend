<?php
    namespace App\Http\Controllers;

    use App\Models\ImageModel;
    use App\Http\Requests\StoreImageModelRequest;
    use App\Http\Requests\UpdateImageModelRequest;


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
