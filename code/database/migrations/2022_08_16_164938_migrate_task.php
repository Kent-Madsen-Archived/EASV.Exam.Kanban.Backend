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
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;


    return new class extends Migration
    {
        public function up()
        {
            //
            Schema::create('tasks',
                function( Blueprint $table )
                {
                    $table->id();

                    $table->text( 'title' );
                    $table->mediumText( 'description' );


                    $table->bigInteger('author_id' )
                          ->unsigned()
                          ->nullable()
                          ->index();

                    $table->bigInteger('project_id' )
                          ->unsigned()
                          ->nullable()
                          ->index();

                    $table->timestamp( 'deadline_at' )
                          ->nullable()
                          ->index();

                    $table->timestamps();


                    $table->foreign( 'author_id' )
                          ->references( 'id' )
                          ->on( 'users' );

                    $table->foreign( 'project_id' )
                          ->references( 'id' )
                          ->on( 'projects' );
                }
            );

            Schema::create('task_associates',
                function( Blueprint $table )
                {
                    $table->id();

                    $table->bigInteger( 'task_id' )
                          ->unsigned();

                    $table->bigInteger( 'task_group_id' )
                          ->unsigned();

                    $table->foreign( 'task_id' )
                          ->references( 'id' )
                          ->on( 'tasks' );

                    $table->foreign( 'task_group_id' )
                          ->references( 'id' )
                          ->on( 'task_groups' );
                }
            );
        }


        public function down()
        {
            //
            Schema::dropIfExists( 'task_associates' );
            Schema::dropIfExists( 'tasks' );
        }
    };
?>
