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
            Schema::create( 'password_resets',
                function( Blueprint $table )
                {
                    $table->id();

                    $table->string( 'email' )
                          ->index();

                    $table->string( 'token' );

                    $table->timestamp( 'created_at' )
                          ->nullable();
                }
            );
        }


        public function down()
        {
            Schema::dropIfExists( 'password_resets' );
        }
    };
?>
