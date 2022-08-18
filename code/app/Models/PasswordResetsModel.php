<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Database\Eloquent\Model;

    use Laravel\Sanctum\HasApiTokens;


    class PasswordResetsModel
        extends Model
    {
        use HasFactory;

        protected $table = 'password_resets';
        public $timestamps = false;


        protected $fillable =
        [
            'id',
            'email',
            'token',
            'created_at'
        ];


        protected $hidden =
        [

        ];


        protected $casts =
        [
            'id' => 'integer',
            'email' => 'string',
            'token' => 'string',
            'created_at' => 'timestamp'
        ];
    }
?>
