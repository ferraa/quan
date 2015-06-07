<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresRazonesSocialesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('proveedores_razones_sociales', function(Blueprint $table)
        {
            $table->increments('id_razon_social');
            $table->integer('id_proveedor')->unsigned();
            $table->integer('id_categoria_raz_soc')->unsigned();
            $table->string('descripcion',70);
            $table->integer('cuit_cuil');

            $table->timestamps();

            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedores');
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
        Schema::drop('proveedores_razones_sociales');
	}

}
