<?php

use \Illuminate\Database\Seeder;

class PerfilesTableSeeder extends Seeder{

    /**
     *
     */
    public function run(){

        \DB::table('perfiles')->insert(array(
            'descripcion' => 'Administrador',

        ));

        \DB::table('perfiles')->insert(array(
            'descripcion' => 'Gerente',

        ));

        \DB::table('perfiles')->insert(array(
            'descripcion' => 'Empleado',

        ));


    }

}