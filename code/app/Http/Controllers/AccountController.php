<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\access\AccessAccountRequest;

    use App\Models\User
        as Account;

    use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
    use Illuminate\Foundation\Bus\DispatchesJobs;
    use Illuminate\Foundation\Validation\ValidatesRequests;

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
            $passwd = $request->all()['security']['password'];

            $newAccount = Account::create(
                [
                  'name' => $request->get( 'name' ),
                  'username' => $request->get('username'),
                  'email' => $request->get( 'email' ),
                  'password' => $passwd
                ]
            );

            return response()->json( $newAccount );
        }

        public function show( AccessAccountRequest $request )
        {

        }

        public function me( AccessAccountRequest $request )
        {

        }

        public function update( UpdateAccountRequest $request )
        {

        }

        public function delete( AccessAccountRequest $request )
        {

        }
    }
?>
