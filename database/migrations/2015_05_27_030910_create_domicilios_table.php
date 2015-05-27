<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomiciliosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('domicilios', function(Blueprint $table)
		{
			$table->increments('id_domicilio');
            $table->string('calle',40);
            $table->integer('numero');
            $table->integer('piso')->nulleable();
            $table->integer('id_ciudad');
            $table->boolean('principal');

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
		Schema::drop('domicilios');
	}

}
