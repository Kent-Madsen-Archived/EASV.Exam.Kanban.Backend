<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\access\AccessAccountRequest;

    use App\Models\User
        as Account;

    use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
    use Illuminate\Foundation\Bus\DispatchesJobs;
    use Illuminate\Foundation\Validation\ValidatesRequests;

    use Illuminate\Http\JsonResponse;use Illuminate\Routing\Controller
        as BaseController;

    use App\Http\Requests\store\StoreAccountRequest;
    use App\Http\Requests\update\UpdateAccountRequest;


    class AccountController
        extends BaseController
    {
        use AuthorizesRequests,
            DispatchesJobs,
            ValidatesRequests;


        public function index( AccessAccountRequest $request ): JsonResponse
        {


            return response()->json('');
        }

        public function login( StoreAccountRequest $request ): JsonResponse
        {


            return response()->json('');
        }

        public function store( StoreAccountRequest $request ): JsonResponse
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

            $bearerToken = $newAccount->createToken( 'api' )->plainTextToken;
            return response()->json( [ 'bearer_token' => $bearerToken ] );
        }

        public function show( AccessAccountRequest $request ): JsonResponse
        {

            return response()->json('');
        }

        public function me( AccessAccountRequest $request ): JsonResponse
        {


            return response()->json('');
        }

        public function update( UpdateAccountRequest $request ): JsonResponse
        {


            return response()->json('');
        }

        public function delete( AccessAccountRequest $request ): JsonResponse
        {


            return response()->json('');
        }
    }
?>
