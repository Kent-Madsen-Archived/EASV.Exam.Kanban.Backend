<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class ImageResourceModel
        extends Model
    {
        use HasFactory;

        protected $table = 'images';

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
