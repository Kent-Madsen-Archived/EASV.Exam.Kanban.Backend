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
    namespace App\Models\Resources;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class ImagePreviewModel
        extends Model
    {
        use HasFactory;

        protected $table = 'images_previews';
        public $timestamps = false;

        private const column_id = 'id';
        private const column_url = 'url';

        private const column_image_id = 'image_id';

        private const column_width = 'width';
        private const column_height = 'height';


        protected $fillable =
        [
            self::column_id,
            self::column_url,

            self::column_image_id,

            self::column_width,
            self::column_height
        ];


        protected $hidden =
        [

        ];


        protected $casts =
        [
            self::column_id  => 'integer',
            self::column_url => 'string',

            self::column_image_id => 'integer',

            self::column_width  => 'integer',
            self::column_height => 'integer'
        ];
    }
?>
