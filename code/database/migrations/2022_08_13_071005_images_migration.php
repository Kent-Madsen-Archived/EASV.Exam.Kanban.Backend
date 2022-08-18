<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;


    return new class extends Migration
    {

        public function up()
        {
            //
            Schema::create( 'images',
                function( Blueprint $table )
                {
                    $table->id();

                    $table->bigInteger('original_owner_id' )
                          ->unsigned()
                          ->nullable()
                          ->index();

                    $table->bigInteger( 'project_id' )
                          ->unsigned()
                          ->index();

                    $table->text('origin_url' );

                    $table->integer( 'width' );
                    $table->integer( 'height' );

                    $table->text( 'alt' );
                    $table->json( 'attributes' );

                    $table->timestamps();

                    $table->foreign( 'original_owner_id' )
                          ->references( 'id' )
                          ->on( 'users' );

                    $table->foreign('project_id' )
                          ->references( 'id' )
                          ->on( 'projects' );
                }
            );

            Schema::create( 'image_resources',
                function( Blueprint $table )
                {
                    $table->id();

                    $table->text( 'url' );

                    $table->bigInteger( 'image_id' )
                          ->unsigned();

                    $table->integer( 'width' );
                    $table->integer( 'height' );

                    $table->text( 'type' );

                    $table->foreign( 'image_id' )
                          ->references( 'id' )
                          ->on( 'images' );
                }
            );
        }


        public function down()
        {
            //
            Schema::dropIfExists( 'image_resources' );
            Schema::dropIfExists( 'images' );
        }
    };
?>
