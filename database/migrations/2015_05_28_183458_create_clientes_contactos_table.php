<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesContactosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('clientes_contactos', function(Blueprint $table)
        {
            $table->integer('id_cliente')->unsigned();
            $table->integer('id_contacto')->unsigned();
            $table->timestamps();
            $table->primary(['id_cliente','id_contacto']);

            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');

            $table->foreign('id_contacto')->references('id_contacto')->on('contactos');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('clientes_contactos');
	}

}
