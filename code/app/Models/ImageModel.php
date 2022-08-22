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

        private const column_id = 'id';

        private const column_original_owner_id = 'original_owner_id';
        private const column_origin_url = 'origin_url';

        private const column_width = 'width';
        private const column_height = 'height';

        private const column_created_at = 'created_at';
        private const column_updated_at = 'updated_at';

        private const column_alt = 'alt';
        private const column_attributes = 'attributes';


        protected $fillable =
        [
            self::column_id,

            self::column_original_owner_id,
            self::column_origin_url,

            self::column_width,
            self::column_height,

            self::column_alt,
            self::column_attributes,

            self::column_created_at,
            self::column_updated_at
        ];


        protected $hidden =
        [
            self::column_id,

            self::column_attributes,

            self::column_created_at,
            self::column_updated_at
        ];


        protected $casts =
        [
            self::column_id => 'integer',

            self::column_original_owner_id  => 'integer',
            self::column_origin_url         => 'string',

            self::column_width  => 'integer',
            self::column_height => 'integer',

            self::column_alt        => 'string',
            self::column_attributes => 'collection',

            self::column_created_at => 'datetime:Y-m-d',
            self::column_updated_at => 'datetime:Y-m-d'
        ];
    }
?>
