<?php
    // $request->header('version')
    namespace App\Http\Controllers;

    use App\Models\User;use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
    use Illuminate\Foundation\Bus\DispatchesJobs;
    use Illuminate\Foundation\Validation\ValidatesRequests;

    use Illuminate\Http\Request;

    use Illuminate\Routing\Controller
        as BaseController;

    use App\Http\Requests\store\StoreAccountRequest;
    use App\Http\Requests\update\UpdateAccountRequest;


    class AccountController
        extends BaseController
    {
        use AuthorizesRequests,
            DispatchesJobs,
            ValidatesRequests;


        public function index( Request $request )
        {

        }

        public function store( StoreAccountRequest $request )
        {

        }

        public function show( Request $request )
        {

        }

        public function me( Request $request )
        {

        }

        public function update( UpdateAccountRequest $request,
                                User $user )
        {

        }

        public function delete( Request $request )
        {

        }
    }
?>
