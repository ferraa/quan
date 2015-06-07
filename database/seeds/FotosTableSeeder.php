<?php

use \Illuminate\Database\Seeder;
use \Faker\Factory as Faker;

class FotosTableSeeder extends Seeder{

    /**
     *
     */
    public function run(){


            \DB::table('fotos')->insert(array(
                'path' => 'jarron.jpg',
            ));

        \DB::table('fotos')->insert(array(
            'path' => 'seesa.png',
        ));



    }

}