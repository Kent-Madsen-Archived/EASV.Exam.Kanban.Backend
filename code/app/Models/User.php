<?php
    namespace App\Models;

    // use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;

    use Illuminate\Foundation\Auth\User
        as Authenticatable;

    use Illuminate\Notifications\Notifiable;
    use Laravel\Sanctum\HasApiTokens;


    class User
        extends Authenticatable
    {
        use HasApiTokens,
            HasFactory,
            Notifiable;

        public $timestamps = true;
        protected $table = 'users';

        protected $fillable =
        [
            'id',

            'name',
            'email',

            'username',
            'password',

            'created_at',
            'email_verified_at',
            'updated_at'
        ];


        protected $hidden =
        [
            'id',

            'email',

            'password',
            'remember_token',

            'created_at',
            'email_verified_at'
        ];


        protected $casts =
        [
            'id' => 'integer',

            'username' => 'string',
            'name' => 'string',
            'email' => 'string',


            'remember_token' => 'string',

            'email_verified_at' => 'datetime:Y-m-d',
            'created_at'        => 'datetime:Y-m-d',
            'updated_at'        => 'datetime:Y-m-d'
        ];
    }
?>
