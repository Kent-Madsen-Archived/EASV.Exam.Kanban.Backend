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

            'created_at',
            'updated_at',
        ];


        protected $hidden =
        [
            'author_id',

            'created_at',
            'updated_at'
        ];


        protected $casts =
        [

        ];
    }
?>
