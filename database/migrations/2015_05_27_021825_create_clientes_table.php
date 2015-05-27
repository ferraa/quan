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
            $table->string('denominacion',40);
            $table->string('nombres',40);
            $table->string('apellidos',40);
            $table->integer('dni');
            $table->string('telefono',20);
            $table->integer('extension');
            $table->string('celular',25);
            $table->string('mail',45);
            $table->string('pagina_web',40);
            $table->text('notas');
            $table->unsignedInteger('id_foto');
            $table->softDeletes();
			$table->timestamps();
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
