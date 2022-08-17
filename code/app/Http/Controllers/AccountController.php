<?php
    namespace App\Http\Controllers;

    use http\Env\Response;use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
    use Illuminate\Foundation\Bus\DispatchesJobs;
    use Illuminate\Foundation\Validation\ValidatesRequests;

    use Illuminate\Http\JsonResponse;

    use Illuminate\Routing\Controller
        as BaseController;

    use Illuminate\Support\Facades\Hash;
    use Jenssegers\Agent\Agent;

    use App\Http\Requests\access\AccessAccountRequest;

    use App\Models\User
        as Account;

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


            return response()->json('' );
        }

        public function login( StoreAccountRequest $request ): JsonResponse
        {
            $in = $request->all();

            $requestEmail = $in[ 'email' ];
            $requestPassword = $in[ 'security' ][ 'password' ];

            $user = Account::where( 'email', '=', $requestEmail )->firstOrFail();
            $login = Hash::check( $requestPassword, $user->password );

            if( $login )
            {
                $bearerToken = $user->createToken( 'api' )->plainTextToken;
                return response()->json( $bearerToken );
            }

            return response()->json('error: wrong input');
        }

        public function store( StoreAccountRequest $request ): JsonResponse
        {
            $passwd = $request->all()['security']['password'];

            $newAccount = Account::create(
                [
                  'name' => $request->get( 'name' ),
                  'username' => $request->get('username'),
                  'email' => $request->get( 'email' ),
                  'password' => Hash::make( $passwd )
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
