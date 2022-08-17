<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\access\AccessAccountRequest;
    use App\Models\User;

    use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
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


        public function index( AccessAccountRequest $request )
        {

        }

        public function store( StoreAccountRequest $request )
        {

        }

        public function show( AccessAccountRequest $request,
                              User $user )
        {

        }

        public function me( AccessAccountRequest $request )
        {

        }

        public function update( UpdateAccountRequest $request,
                                User $user )
        {

        }

        public function delete( AccessAccountRequest $request,
                                User $user )
        {

        }
    }
?>
