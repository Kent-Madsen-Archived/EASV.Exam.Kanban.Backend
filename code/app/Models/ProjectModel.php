<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class ProjectModel
        extends Model
    {
        use HasFactory;

        protected $table = 'projects';
        public $timestamps = true;

        protected $fillable =
        [
            'id',

            'title',
            'description',
            'attributes',

            'template_id',

            'created_at',
            'updated_at'
        ];


        protected $hidden =
        [
            'template_id',

            'created_at',
            'updated_at'
        ];


        protected $casts =
        [
            'id' => 'integer',

            'title' => 'string',
            'description' => 'string',

            'attributes' => 'collection',

            'template_id' => 'integer',

            'created_at' => 'datetime',
            'updated_at' => 'datetime'
        ];
    }
?>
