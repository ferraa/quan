<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresCentrosDeCostoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('proveedores_centros_de_costo_detalle', function(Blueprint $table) {
            $table->integer('id_proveedor')->unsigned();
            $table->integer('id_centro_de_costo_detalle')->unsigned();

            $table->timestamps();
            $table->primary(['id_proveedor','id_centro_de_costo_detalle'],'proveedores_centros_de_costo_pk');


            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedores');

            $table->foreign('id_centro_de_costo_detalle','proveedores_centros_de_costo_detalle_foreign')->references('id_centro_de_costo_detalle')->on('centros_de_costo_detalles');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('proveedores_centros_de_costo_detalle');
	}

}
