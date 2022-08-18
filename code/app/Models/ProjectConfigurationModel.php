<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class ProjectConfigurationModel
        extends Model
    {
        use HasFactory;

        protected $table = 'project_configuration';
        public $timestamps = false;

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
