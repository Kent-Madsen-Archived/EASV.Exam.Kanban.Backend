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


    class TeamMemberOptionsModel
        extends Model
    {
        use HasFactory;

        protected $table = 'task_member_options';
        public $timestamps = true;

        private const column_id = 'id';


        protected $fillable =
        [
            self::column_id
        ];


        protected $hidden =
        [

        ];


        protected $casts =
        [

        ];
    }
?>
