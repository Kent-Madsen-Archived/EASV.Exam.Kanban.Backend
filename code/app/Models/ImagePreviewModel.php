<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class ImagePreviewModel
        extends Model
    {
        use HasFactory;

        protected $table = 'images_previews';
        public $timestamps = false;

        protected $fillable =
        [
            'id',
            'url',

            'image_id',

            'width',
            'height'
        ];


        protected $hidden =
        [

        ];


        protected $casts =
        [

        ];
    }
?>
