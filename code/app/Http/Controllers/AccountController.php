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


        public final function index( AccessAccountRequest $request ): JsonResponse
        {

            return response()->json('testIndex' );
        }

        public final function me( Request $request ): JsonResponse
        {
            $resp =
            [
                'identity' => $request->user()->id,
                'name' => $request->user()->name,

                'email' => $request->user()->email,
                'username' => $request->user()->username,

                'created_at' => $request->user()->created_at,
                'updated_at' => $request->user()->updated_at
            ];

            return response()->json( $resp );
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
            $passwd = $request->all()[ 'security' ][ 'password' ];

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
            $find = Account::where( 'id', '=', $request->id )->firstOrFail();

            $response =
            [
                'name' => $find->name,
                'username' => $find->username,
                'updated_at' => $find->updated_at
            ];

            return response()->json( $response );
        }


        public final function update( UpdateAccountRequest $request ): JsonResponse
        {
            $inp = $request->all();

            $user = $request->user();
            $loginRequired = Hash::check( $inp[ 'security' ][ 'old' ], $user->password );

            if( $loginRequired )
            {
                $indicateChange = false;

                if( $request->has( 'email' ) )
                {
                    $user->email = $inp[ 'email' ];
                    $indicateChange = true;
                }

                if( $request->has( 'security.password' ) )
                {
                    $newPasswd = Hash::make( $inp[ 'security' ][ 'password' ] );
                    $user->password = $newPasswd;
                    $indicateChange = true;
                }

                if( $indicateChange )
                {
                    $user->save();
                    return response()->json( 'successful' );
                }
            }

            return response()->json( $inp );
        }


        public final function delete( AccessAccountRequest $request ): JsonResponse
        {
            $inp = $request->all();

            $loginRequired = Hash::check( $inp[ 'security' ][ 'password' ],
                                          $request->user()->password );

            if( $loginRequired )
            {
                $request->user()->delete();
                return response()->json( 'Successful' );
            }

            return response()->json( 'Nothing' );
        }


        public final function logout( AccessAccountRequest $request ): JsonResponse
        {


            return response()->json();
        }
    }
?>
