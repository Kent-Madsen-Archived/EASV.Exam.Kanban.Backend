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
        protected $table = '';
        public $timestamps = false;


        protected $fillable =
        [
            'identity',
            'email',
            'token',
            'created_at'
        ];


        protected $hidden =
        [

        ];


        protected $casts =
        [

        ];
    }
?>
