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
            'id' => 'integer',

            'account_id' => 'integer',
            'project_id' => 'integer',

            'created_at' => 'datetime',
            'updated_at' => 'datetime'
        ];
    }
?>
