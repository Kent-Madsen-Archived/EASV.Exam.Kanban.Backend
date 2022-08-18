<?php
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
