<?php

use \Illuminate\Database\Seeder;
use \Faker\Factory as Faker;

class ProveedoresTableSeeder extends Seeder{

    /**
     *
     */
    public function run(){

        $faker = Faker::create('es_AR');

        for($i=0;$i<500;$i++){
            \DB::table('proveedores')->insert(array(
                'denominacion' => $faker->name,

                'mail' => $faker->email,
                'pagina_web' => 'www.'.$faker->name.'.com.ar',
                'telefono' => $faker->phoneNumber,
                'notas' => $faker->name,
                'id_foto' => 1,
            ));


        }
    }

}