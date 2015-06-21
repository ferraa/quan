<?php

use \Illuminate\Database\Seeder;

class CategoriasRazonesSocialesTableSeeder extends Seeder{

    /**
     *
     */
    public function run(){

        \DB::table('categorias_razones_sociales')->insert(array(
            'id_categoria_raz_soc' => '1',
            'descripcion' => 'Responsable inscripto',
        ));

        \DB::table('categorias_razones_sociales')->insert(array(
            'id_categoria_raz_soc' => '2',
            'descripcion' => 'Exento',
        ));

        \DB::table('categorias_razones_sociales')->insert(array(
            'id_categoria_raz_soc' => '3',
            'descripcion' => 'Monotributista',
        ));

        \DB::table('categorias_razones_sociales')->insert(array(
            'id_categoria_raz_soc' => '4',
            'descripcion' => 'Consumidor final',
        ));

    }

}