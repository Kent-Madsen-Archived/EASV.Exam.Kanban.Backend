<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class TeamMemberOptionsModel
        extends Model
    {
        use HasFactory;

        protected $table = 'task_member_options';
        public $timestamps = true;

        protected $fillable =
        [
            'id'
        ];


        protected $hidden =
        [

        ];


        protected $casts =
        [

        ];
    }
?>
