<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesDomiciliosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('clientes_domicilios', function(Blueprint $table)
        {
            $table->integer('id_cliente')->unsigned();
            $table->integer('id_domicilio')->unsigned();
            $table->timestamps();
            $table->primary(['id_cliente','id_domicilio']);

            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');

            $table->foreign('id_domicilio')->references('id_domicilio')->on('domicilios');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('clientes_domicilios');
	}

}
