<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentrosDeCostoDetallesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('centros_de_costo_detalles', function(Blueprint $table)
		{
			$table->increments('id_centro_de_costo_detalle');

            $table->integer('id_centro_de_costo')->unsigned();

            $table->string('detalle',70);

			$table->timestamps();

            $table->foreign('id_centro_de_costo')->references('id_centro_de_costo')->on('centros_de_costo');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('centros_de_costo_detalles');
	}

}
