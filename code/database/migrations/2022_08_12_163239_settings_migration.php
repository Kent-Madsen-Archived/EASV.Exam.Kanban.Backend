<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;


    return new class extends Migration
    {

        public function up()
        {
            //
            Schema::create( 'settings',
                function( Blueprint $table )
                {
                    $table->id();

                    $table->bigInteger( 'account_id' )
                          ->unsigned()
                          ->index();

                    $table->text( 'category' )
                          ->index();

                    $table->json( 'attributes' );

                    $table->timestamps();

                    $table->foreign( 'account_id' )
                          ->references( 'id' )
                          ->on( 'users' );
                }
            );
        }


        public function down()
        {
            //
            Schema::dropIfExists( 'settings' );
        }
    };
?>
