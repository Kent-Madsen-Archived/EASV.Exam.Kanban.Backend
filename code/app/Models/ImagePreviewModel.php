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
            'id' => 'integer',
            'url' => 'string',

            'image_id' => 'integer',

            'width' => 'integer',
            'height' => 'integer'
        ];
    }
?>
