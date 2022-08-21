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
            Schema::create( 'project_configurations',
                function( Blueprint $table )
                {
                    $table->id();

                    $table->bigInteger('project_id' )
                          ->unsigned()
                          ->index();

                    $table->json( 'attributes' )
                          ->nullable();

                    $table->foreign( 'project_id' )
                          ->references( 'id' )
                          ->on( 'projects' );

                    $table->timestamps();
                }
            );
        }


        public function down()
        {
            //
            Schema::dropIfExists( 'project_configurations' );
        }
    };
?>
