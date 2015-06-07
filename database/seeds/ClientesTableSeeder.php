<?php

use \Illuminate\Database\Seeder;
use \Faker\Factory as Faker;

class ClientesTableSeeder extends Seeder{

    /**
     *
     */
    public function run(){

        \DB::table('clientes')->insert(array(
            'nombres' => 'Matias',
            'apellidos' => 'Ferrario',

            'mail' => 'ferraa@hotmail.com',
            'pagina_web' => 'www.gregor.com.ar',
            'telefono' => '1164455073',
            'notas' => 'Notas',
            'id_foto' => 1,
        ));

        $faker = Faker::create('es_AR');

        for($i=0;$i<500;$i++){
            \DB::table('clientes')->insert(array(
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