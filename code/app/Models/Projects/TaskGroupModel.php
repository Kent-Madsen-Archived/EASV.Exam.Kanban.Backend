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
    namespace App\Models\Projects;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class TaskGroupModel
        extends Model
    {
        use HasFactory;

        protected $table = 'task_groups';
        public $timestamps = true;

        private const column_id = 'id';

        private const column_group_name = 'group_name';

        private const column_created_at = 'created_at';
        private const column_updated_at = 'updated_at';


        protected $fillable =
        [
            self::column_id,
            self::column_group_name,

            self::column_created_at,
            self::column_updated_at
        ];


        protected $hidden =
        [
            self::column_id,

            self::column_created_at,
            self::column_updated_at
        ];


        protected $casts =
        [
            self::column_id         => 'integer',
            self::column_group_name => 'integer',

            self::column_created_at => 'datetime:Y-m-d',
            self::column_updated_at => 'datetime:Y-m-d'
        ];
    }
?>
