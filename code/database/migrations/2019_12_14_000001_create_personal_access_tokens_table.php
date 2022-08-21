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
            Schema::create( 'personal_access_tokens',
                function( Blueprint $table )
                {
                    $table->id();

                    $table->morphs( 'tokenable' );
                    $table->string( 'name' );

                    $table->string( 'token', 64 )
                          ->unique();

                    $table->text( 'abilities' )
                          ->nullable();

                    $table->timestamp( 'last_used_at' )
                          ->nullable();

                    $table->timestamp( 'expires_at' )
                          ->nullable();

                    $table->timestamps();
                }
            );
        }


        public function down()
        {
            Schema::dropIfExists( 'personal_access_tokens' );
        }
    };
?>
