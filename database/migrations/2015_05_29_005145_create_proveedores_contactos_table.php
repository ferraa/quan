<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresContactosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('proveedores_contactos', function(Blueprint $table)
        {
            $table->integer('id_proveedor')->unsigned();
            $table->integer('id_contacto')->unsigned();
            $table->timestamps();
            $table->primary(['id_proveedor','id_contacto']);

            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedores');

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
        Schema::drop('proveedores_contactos');
	}

}
