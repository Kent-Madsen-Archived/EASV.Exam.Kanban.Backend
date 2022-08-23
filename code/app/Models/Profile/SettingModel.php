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
    namespace App\Models\Profile;

    use Illuminate\Database\Eloquent\Factories\HasFactory;use Illuminate\Database\Eloquent\Model;


    class SettingModel
        extends Model
    {
        use HasFactory;

        protected $table = 'settings';
        public $timestamps = false;

        private const column_id = 'id';

        private const column_account_id = 'account_id';
        private const column_category = 'category';
        private const column_attributes = 'attributes';

        private const column_created_at = 'created_at';
        private const column_updated_at = 'updated_at';


        protected $fillable =
        [
            self::column_id,

            self::column_account_id,
            self::column_category,
            self::column_attributes,

            self::column_created_at,
            self::column_updated_at
        ];


        protected $hidden =
        [

        ];


        protected $casts =
        [
            self::column_id => 'integer',

            self::column_account_id => 'integer',
            self::column_category => 'string',
            self::column_attributes => 'collection',

            self::column_created_at => 'datetime:Y-m-d',
            self::column_updated_at => 'datetime:Y-m-d'
        ];
    }
?>
