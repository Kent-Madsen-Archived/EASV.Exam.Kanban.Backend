<?php
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

                    $table->timestamps();

                    $table->foreign( 'author_id' )
                          ->references( 'id' )
                          ->on( 'users' );
                }
            );
        }


        public function down()
        {
            //
            Schema::dropIfExists( 'tasks' );
        }
    };
?>
