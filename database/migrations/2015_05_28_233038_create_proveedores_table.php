<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proveedores', function(Blueprint $table) {
            $table->increments('id_proveedor');

            $table->string('denominacion', 100)->nullable();
            $table->string('nombres', 50)->nullable();
            $table->string('apellidos', 50)->nullable();
            $table->integer('dni')->nullable();
            $table->string('telefono', 30);
            $table->string('extension', 8)->nullable();
            $table->string('celular', 30)->nullable();
            $table->string('mail', 100)->nullable();
            $table->string('pagina_web', 200);
            $table->text('notas');
            $table->integer('id_foto')->unsigned()->nullable();


            $table->softDeletes();
			$table->timestamps();

            $table->foreign('id_foto')->references('id_foto')->on('fotos');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('proveedores');
	}

}
