<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class ProjectConfigurationModel
        extends Model
    {
        use HasFactory;

        protected $table = 'project_configurations';
        public $timestamps = true;

        protected $fillable =
        [
            'id',

            'project_id',
            'attributes',

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
