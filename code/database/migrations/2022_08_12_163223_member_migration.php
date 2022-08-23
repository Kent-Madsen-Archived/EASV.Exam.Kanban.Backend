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
            Schema::create( 'teams',
                function( Blueprint $table )
                {
                    $table->id();

                    $table->string( 'team_name' )
                          ->index();

                    $table->mediumText( 'description' )
                          ->nullable();

                    $table->bigInteger( 'team_owner_id' )
                          ->unsigned()
                          ->index();
                }
            );


            //
            Schema::create( 'team_members',
                function( Blueprint $table )
                {
                    $table->id();

                    $table->bigInteger( 'account_id' )
                          ->unsigned()
                          ->nullable()
                          ->index();

                    $table->bigInteger( 'team_id' )
                          ->unsigned()
                          ->nullable()
                          ->index();

                    $table->bigInteger('project_id' )
                          ->unsigned()
                          ->nullable();

                    $table->timestamps();

                    $table->foreign( 'account_id' )
                          ->references( 'id' )
                          ->on( 'users' );

                    $table->foreign( 'project_id' )
                          ->references( 'id' )
                          ->on( 'projects' );
                }
            );
        }


        public function down()
        {
            //
            Schema::dropIfExists( 'team_members' );
            Schema::dropIfExists( 'teams' );
        }
    };
?>
