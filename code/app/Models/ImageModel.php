<?php
    /**
     * Author: Kent Madsen
     * Version: 1.0.0
     * Copyright: 2022, Kent vejrup Madsen
     *
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Code of Conduct: https://github.com/KentVejrupMadsen/EASV.Exam.Kanban.Backend/blob/main/code_of_conduct.md
     *
     * License: https://github.com/KentVejrupMadsen/EASV.Exam.Kanban.Backend/blob/main/license.md
     */
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

            'created_at' => 'datetime:Y-m-d',
            'updated_at' => 'datetime:Y-m-d'
        ];
    }
?>
