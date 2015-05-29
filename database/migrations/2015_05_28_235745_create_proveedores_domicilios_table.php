<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresDomiciliosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proveedores_domicilios', function(Blueprint $table)
		{
            $table->integer('id_proveedor')->unsigned();
            $table->integer('id_domicilio')->unsigned();
            $table->timestamps();
            $table->primary(['id_proveedor','id_domicilio']);

            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedores');

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
		Schema::table('proveedores_domicilios', function(Blueprint $table)
		{
            Schema::drop('proveedores_domicilios');
		});
	}

}
