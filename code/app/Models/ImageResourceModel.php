<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class ImageResourceModel
        extends Model
    {
        use HasFactory;

        protected $table = 'images_resources';
        public $timestamps = false;


        protected $fillable =
        [
            'id',

            'url',
            'image_id',

            'width',
            'height',

            'type'
        ];


        protected $hidden =
        [

        ];


        protected $casts =
        [
            'id' => 'integer',

            'url' => 'string',
            'image_id' => 'integer',

            'width' => 'integer',
            'height' => 'integer',

            'type' => 'string'
        ];
    }
?>
