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


    class ProjectModel
        extends Model
    {
        use HasFactory;

        protected $table = 'projects';
        public $timestamps = true;

        protected $fillable =
        [
            'id',

            'title',
            'description',
            'attributes',

            'template_id',
            'creator_id',

            'created_at',
            'updated_at'
        ];


        protected $hidden =
        [
            'template_id',

            'created_at',
            'updated_at'
        ];


        protected $casts =
        [
            'id' => 'integer',

            'title' => 'string',
            'description' => 'string',

            'attributes' => 'collection',

            'template_id' => 'integer',

            'created_at' => 'datetime:Y-m-d',
            'updated_at' => 'datetime:Y-m-d'
        ];
    }
?>
