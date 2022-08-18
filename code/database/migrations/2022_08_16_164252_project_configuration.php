<?php
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
