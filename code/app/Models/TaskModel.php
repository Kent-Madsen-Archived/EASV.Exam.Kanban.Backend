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


    class TaskModel
        extends Model
    {
        use HasFactory;

        protected $table = 'tasks';
        public $timestamps = true;

        private const column_id = 'id';

        private const column_title = 'title';
        private const column_description = 'description';

        private const column_author_id = 'author_id';
        private const column_project_id = 'project_id';

        private const column_deadline = 'deadline';

        private const column_created_at = 'created_at';
        private const column_updated_at = 'updated_at';


        protected $fillable =
        [
            self::column_id,

            self::column_title,
            self::column_description,

            self::column_author_id,
            self::column_project_id,

            self::column_deadline,

            self::column_created_at,
            self::column_updated_at,
        ];


        protected $hidden =
        [
            self::column_author_id,
            self::column_project_id,

            self::column_created_at,
            self::column_updated_at
        ];


        protected $casts =
        [
            self::column_id         => 'integer',
            self::column_project_id => 'integer',

            self::column_title       => 'string',
            self::column_description => 'string',

            self::column_deadline => 'datetime:Y-m-d',

            self::column_author_id => 'integer',

            self::column_created_at => 'datetime:Y-m-d',
            self::column_updated_at => 'datetime:Y-m-d'
        ];
    }
?>
