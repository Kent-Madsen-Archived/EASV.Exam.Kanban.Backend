<?php
    /**
     * Author: Kent Madsen
     * Version: 1.0.0
     * Copyright: 2022, Kent vejrup Madsen
     *
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Code of Conduct: https://github.com/KentVejrupMadsen/EASV.Exam.Kanban.Backend/blob/main/code_of_conduct.md
     *
     * License: https://github.com/KentVejrupMadsen/EASV.Exam.Kanban.Backend/blob/main/license.md
     */
    namespace App\Http\Controllers\Profile;

    use App\Http\Controllers\Controller;use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
    use Illuminate\Foundation\Bus\DispatchesJobs;
    use Illuminate\Foundation\Validation\ValidatesRequests;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use Illuminate\Routing\Controller
        as BaseController;
    use Illuminate\Support\Facades\Hash;

    use OpenApi\Attributes
        as OA;

    use App\Http\Requests\access\global\AccessPublicRequest;
    use App\Http\Requests\access\AccessAccountRequest;
    use App\Http\Requests\store\StoreAccountRequest;
    use App\Http\Requests\update\UpdateAccountRequest;

    use App\Models\Profile\Account
        as Account;



    #[OA\Schema( title: 'Account Controller',
                 description: '',
                 type: 'controller' )]
    class AccountController
        extends Controller
    {
        private const field_identity = 'identity';
        private const field_name = 'name';

        private const field_username = 'username';
        private const field_password = 'password';

        private const field_updated_at = 'updated_at';
        private const field_created_at = 'created_at';

        private const field_email = 'email';


        #[OA\Get( path: '/api/1.0.0/accounts/index',
                  tags: [ '1.0.0', 'index' ] )]
        public final function index( AccessPublicRequest $request ): JsonResponse
        {
            $response = array();

            foreach( Account::all()
                        as $current_account )
            {
                $result =
                [
                    self::field_identity => $current_account->id,
                    self::field_username => $current_account->username
                ];

                array_push($response, $result );
            }

            return response()->json( $response );
        }


        #[OA\Get( path: '/api/1.0.0/accounts/me',
                  security: [ new OA\SecurityScheme( 'bearerToken' ) ],
                  tags: [ '1.0.0', 'me' ] )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(

                               example: "<<<JSON \r\n" .
                                        "{ \r\n" .
                                         	"'identity': id, \r\n" .
                                         	"'name': 'person name', \r\n".
                                         	"'email': 'person email', \r\n" .
                                         	"'username': 'my username', \r\n" .
                                         	"'created_at': 'creation date', \r\n".
                                         	"'updated_at': 'last updated at' \r\n" .
                                        "} \r\n"
                           ),
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function me( Request $request ): JsonResponse
        {
            $resp =
            [
                self::field_identity => $request->user()->id,
                self::field_name     => $request->user()->name,

                self::field_email    => $request->user()->email,
                self::field_username => $request->user()->username,

                self::field_created_at => $request->user()->created_at,
                self::field_updated_at => $request->user()->updated_at
            ];

            return response()->json( $resp );
        }


        #[OA\Get( path: '/api/1.0.0/accounts/login',
                  tags: [ '1.0.0', '' ]
        )]
        #[OA\RequestBody(
            content: new OA\JsonContent(
                example: ""
            )
        )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(example: "<<<JSON"),
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
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


        #[OA\Post( path: '/api/1.0.0/accounts/create',
                   tags: [ '1.0.0', '' ] )]
        #[OA\RequestBody(
                  content: new OA\JsonContent( example: "" )
        )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(example: "<<<JSON")
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function store( StoreAccountRequest $request ): JsonResponse
        {
            $passwd = $request->all()[ 'security' ][ 'password' ];

            $newAccount = Account::create(
                [
                  self::field_name      => $request->get( 'name' ),
                  self::field_username  => $request->get('username'),
                  self::field_email     => $request->get( 'email' ),
                  self::field_password  => Hash::make( $passwd )
                ]
            );

            $bearerToken = $newAccount->createToken( 'api' )->plainTextToken;
            return response()->json( [ 'bearer_token' => $bearerToken ] );
        }


        #[OA\Get( path: '/api/1.0.0/accounts/identity/{id}',
                  tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'bearer token - has to be included in the header of the request',
                        in: 'header' )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(example: "<<<JSON")
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function show( AccessAccountRequest $request ): JsonResponse
        {
            $find = Account::where( 'id', '=', $request->id )->firstOrFail();

            $response =
            [
                self::field_name        => $find->name,
                self::field_username    => $find->username,
                self::field_updated_at  => $find->updated_at
            ];

            return response()->json( $response );
        }


        #[OA\Patch( path: '/api/1.0.0/accounts/update',
                    tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'bearer token - has to be included in the header of the request',
                        in: 'header' )]
        #[OA\RequestBody(
            content: new OA\JsonContent(example: "")
        )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(example: "<<<JSON")
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
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


        #[OA\Delete( path: '/api/1.0.0/accounts/delete',
                     tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'bearer token - has to be included in the header of the request',
                        in: 'header' )]
        #[OA\RequestBody(
                  content: new OA\JsonContent(
                      example: ""
                  )
        )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(example: "<<<JSON"),
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
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


        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'bearer token - has to be included in the header of the request',
                        in: 'header' )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(example: "<<<JSON"),
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function logout( AccessAccountRequest $request ): JsonResponse
        {
            $request->user()
                    ->currentAccessToken()
                    ->delete();

            return response()->json(
                [
                    'status' => 'successful'
                ]
            );
        }


        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'bearer token - has to be included in the header of the request',
                        in: 'header' )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent( example: "<<<JSON" ),
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function resetTokens( AccessAccountRequest $request ): JsonResponse
        {
            $request->user()
                    ->tokens()
                    ->delete();

            return response()->json(
                [
                    'status' => 'successful'
                ]
            );
        }


        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                                description: 'bearer token - has to be included in the header of the request',
                                in: 'header' )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent( example: "<<<JSON" ),
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function verify( AccessAccountRequest $request ): JsonResponse
        {



            return response()->json(
                [
                    'status' => 'successful'
                ]
            );
        }


        #[OA\Get( path: '/api/1.0.0/',
                  tags: [ '1.0.0', '' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'bearer token - has to be included in the header of the request',
                        in: 'header' )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent( example: "<<<JSON" ),
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function verify_now( AccessAccountRequest $request ): JsonResponse
        {



            return response()->json(
                [
                    'status' => 'successful'
                ]
            );
        }

        public static function generateRoutes()
        {}
    }
?>
