<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class ProjectModel
        extends Model
    {
        use HasFactory;

        protected $table = 'projects';
        public $timestamps = false;

        protected $fillable =
        [
            'id',
            'title',
            'description',
            'attributes'
        ];


        protected $hidden =
        [

        ];


        protected $casts =
        [

        ];
    }
?>
