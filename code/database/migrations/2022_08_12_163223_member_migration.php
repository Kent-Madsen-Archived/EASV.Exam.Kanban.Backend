<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;


    return new class extends Migration
    {

        public function up()
        {
            //
            Schema::create( 'team_members',
                function( Blueprint $table )
                {
                    $table->id();

                    $table->bigInteger( 'account_id' )
                          ->unsigned()
                          ->nullable()
                          ->index();

                    $table->bigInteger('project_id' )
                          ->unsigned();

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
        }
    };
?>
