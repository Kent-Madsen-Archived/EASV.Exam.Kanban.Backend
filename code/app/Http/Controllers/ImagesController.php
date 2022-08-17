<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\access\AccessImageRequest;
    use App\Http\Requests\store\StoreImageRequest;
    use App\Http\Requests\update\UpdateImageRequest;
    use App\Models\ImageModel;


    class ImagesController
        extends Controller
    {
        public function index( AccessImageRequest $request )
        {
            //
        }

        public function store( StoreImageRequest $request )
        {
            //
        }

        public function show( AccessImageRequest $request,
                              ImageModel $imageModel )
        {
            //
        }


        public function update( UpdateImageRequest $request,
                                ImageModel $imageModel )
        {
            //
        }


        public function destroy( AccessImageRequest $request,
                                 ImageModel $imageModel )
        {
            //
        }
    }
?>
