<?php
    // $request->header('version')
    namespace App\Http\Controllers;

    use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
    use Illuminate\Foundation\Bus\DispatchesJobs;
    use Illuminate\Foundation\Validation\ValidatesRequests;

    use Illuminate\Http\Request;

    use Illuminate\Routing\Controller
        as BaseController;


    class AccountController
        extends BaseController
    {
        use AuthorizesRequests,
            DispatchesJobs,
            ValidatesRequests;


        public function index( Request $request )
        {

        }

        public function store( Request $request )
        {

        }

        public function show( Request $request )
        {

        }

        public function me( Request $request )
        {

        }

        public function update( Request $request )
        {

        }

        public function delete( Request $request )
        {

        }
    }
?>
