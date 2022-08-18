<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class TeamMemberModel
        extends Model
    {
        use HasFactory;

        protected $table = 'team_members';
        public $timestamps = true;

        protected $fillable =
        [
            'id',

            'account_id',
            'project_id',

            'created_at',
            'updated_at'
        ];


        protected $hidden =
        [

        ];


        protected $casts =
        [

        ];
    }
?>
