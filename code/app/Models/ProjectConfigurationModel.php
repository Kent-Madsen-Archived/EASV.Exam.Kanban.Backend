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


    class ProjectConfigurationModel
        extends Model
    {
        use HasFactory;

        protected $table = 'project_configurations';
        public $timestamps = true;

        private const column_id = 'id';

        protected $fillable =
        [
            'id',

            'project_id',
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

            'project_id' => 'integer',
            'attributes' => 'collection',

            'created_at' => 'datetime:Y-m-d',
            'updated_at' => 'datetime:Y-m-d'
        ];
    }
?>
