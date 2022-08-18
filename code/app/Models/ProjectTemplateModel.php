<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class ProjectTemplateModel
        extends Model
    {
        use HasFactory;

        protected $table = 'project_templates';
        public $timestamps = true;

        protected $fillable =
        [
            'id',

            'title',

            'description',
            'implementation',

            'created_at',
            'updated_at'
        ];


        protected $hidden =
        [

        ];


        protected $casts =
        [
            'id' => 'integer',

            'title' => 'string',
            'description' => 'string',

            'implementation' => 'collection',

            'created_at' => 'datetime',
            'updated_at' => 'datetime'
        ];
    }
?>
