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

        protected $table = 'users';

        protected $fillable =
        [
            'identity',
            'name',
            'email',
            'username',
            'password',
            'email_verified_at'
        ];


        protected $hidden =
        [
            'password',
            'email',
            'created_at',
            'email_verified_at'
        ];


        protected $casts =
        [
            'created_at' => 'datetime:Y-m-d',
            'updated_at' => 'datetime:Y-m-d',
            'email_verified_at' => 'datetime:Y-m-d',
            'identity' => 'integer',
            'name' => 'string',
            'email' => 'string',
            'username' => 'string',
        ];
    }
?>
