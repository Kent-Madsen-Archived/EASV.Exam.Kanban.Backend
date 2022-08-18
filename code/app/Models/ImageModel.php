<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class ImageModel
        extends Model
    {
        use HasFactory;

        protected $table = 'images';
        public $timestamps = true;

        protected $fillable =
        [
            'id',

            'original_owner_id',
            'origin_url',

            'width',
            'height',

            'alt',
            'attributes',

            'created_at',
            'updated_at'
        ];


        protected $hidden =
        [

        ];


        protected $casts =
        [
            'id' => 'integer',

            'original_owner_id' => 'integer',
            'origin_url' => 'string',

            'width' => 'integer',
            'height' => 'integer',

            'alt' => 'string',
            'attributes' => 'collection',

            'created_at' => 'datetime',
            'updated_at' => 'datetime'
        ];
    }
?>
