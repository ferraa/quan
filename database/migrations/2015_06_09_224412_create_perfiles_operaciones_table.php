<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilesOperacionesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfiles_operaciones', function(Blueprint $table) {

            $table->integer('id_perfil')->unsigned();
            $table->integer('id_sistema_operacion')->unsigned();

            $table->timestamps();

            $table->foreign('id_perfil')->references('id_perfil')->on('perfiles');
            $table->foreign('id_sistema_operacion')->references('id_sistema_operacion')->on('sistema_operaciones');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('perfiles_operaciones');
    }

}
