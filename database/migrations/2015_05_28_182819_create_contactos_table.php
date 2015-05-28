<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contactos', function(Blueprint $table)
		{
			$table->increments('id_contacto');

            $table->string('nombre',70);
            $table->string('apellido',70);
            $table->integer('dni');
            $table->string('mail',100);
            $table->string('mail2',100);
            $table->string('tel_particular',30);
            $table->string('tel_laboral',30);
            $table->string('extension',8);
            $table->string('celular',30);
            $table->text('notas');
            $table->integer('id_foto');

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
		Schema::drop('contactos');
	}

}
