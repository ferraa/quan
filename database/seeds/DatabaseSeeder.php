<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        $this->call('PerfilesTableSeeder');
        $this->call('SistemaOperacionesTableSeeder');
        $this->call('PerfilesOperacionesTableSeeder');
        $this->call('FotosTableSeeder');
        $this->call('UserTableSeeder');
        $this->call('ClientesTableSeeder');
        $this->call('ProveedoresTableSeeder');
        $this->call('CategoriasRazonesSocialesTableSeeder');

    }

}
