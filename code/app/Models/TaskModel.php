<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class TaskModel
        extends Model
    {
        use HasFactory;

        protected $table = 'tasks';
        public $timestamps = true;

        protected $fillable =
        [
            'id',

            'title',
            'description',

            'author_id',
            'prooject_id',

            'created_at',
            'updated_at',
        ];


        protected $hidden =
        [
            'author_id',
            'project_id',

            'created_at',
            'updated_at'
        ];


        protected $casts =
        [
            'id' => 'integer',
            'project_id' => 'integer',

            'title' => 'string',
            'description' => 'string',

            'author_id' => 'integer',

            'created_at' => 'datetime:Y-m-d',
            'updated_at' => 'datetime:Y-m-d'
        ];
    }
?>
