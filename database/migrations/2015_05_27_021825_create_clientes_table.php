<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientes', function(Blueprint $table)
		{
			$table->increments('id_cliente');
            $table->string('denominacion',40)->nullable();
            $table->string('nombres',40)->nullable();
            $table->string('apellidos',40)->nullable();
            $table->integer('dni')->nullable();
            $table->string('telefono',20);
            $table->integer('extension')->nullable();
            $table->string('celular',25)->nullable();
            $table->string('mail',45)->nullable();
            $table->string('pagina_web',40);
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
		Schema::drop('clientes');
	}

}
