<?php
    namespace App\Http\Controllers;

    use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
    use Illuminate\Foundation\Bus\DispatchesJobs;
    use Illuminate\Foundation\Validation\ValidatesRequests;

    use Illuminate\Http\JsonResponse;

    use Illuminate\Http\Request;

    use Illuminate\Routing\Controller
        as BaseController;

    use Illuminate\Support\Facades\Hash;

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


        public final  function index( AccessAccountRequest $request ): JsonResponse
        {


            return response()->json('testIndex' );
        }

        public final function me( Request $request ): JsonResponse
        {
            return response()->json('test');
        }

        public final function login( StoreAccountRequest $request ): JsonResponse
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

        public final function store( StoreAccountRequest $request ): JsonResponse
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

        public final function show( AccessAccountRequest $request ): JsonResponse
        {

            return response()->json('testShow');
        }

        public final function update( UpdateAccountRequest $request ): JsonResponse
        {


            return response()->json('testUpdate');
        }

        public final function delete( AccessAccountRequest $request ): JsonResponse
        {


            return response()->json('testDelete');
        }
    }
?>
