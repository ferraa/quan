<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesRazonesSocialesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientes_razones_sociales', function(Blueprint $table)
		{
			$table->increments('id_razon_social');

            $table->integer('id_cliente')->unsigned();
            $table->integer('id_categoria_raz_soc')->unsigned();
            $table->string('descripcion',40);
            $table->integer('cuit_cuil');

			$table->timestamps();

            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
            $table->foreign('id_categoria_raz_soc')->references('id_categoria_raz_soc')->on('categorias_razones_sociales');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clientes_razones_sociales');
	}

}
