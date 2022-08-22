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
            Schema::create('project_templates',
                function( Blueprint $table )
                {
                    $table->id();

                    $table->text( 'title' );

                    $table->mediumText( 'description' )
                          ->nullable();

                    $table->json( 'implementation' )
                          ->nullable();

                    $table->timestamps();
                }
            );

            Schema::create('projects',
                function( Blueprint $table )
                {
                    $table->id();

                    $table->text( 'title' );

                    $table->mediumText( 'description' )
                          ->nullable();

                    $table->bigInteger('creator_id')
                          ->unsigned()
                          ->nullable()
                          ->index();

                    $table->json( 'attributes' )
                          ->nullable();

                    $table->bigInteger( 'template_id' )
                          ->unsigned()
                          ->nullable()
                          ->index();

                    $table->timestamps();

                    $table->foreign( 'template_id' )
                          ->references( 'id' )
                          ->on( 'project_templates' );

                    $table->foreign( 'creator_id' )
                          ->references( 'id' )
                          ->on( 'users' );
                }
            );

        }


        public function down()
        {
            Schema::dropIfExists( 'projects' );
            Schema::dropIfExists( 'project_templates' );
        }
    };
?>
