<?php

use \Illuminate\Database\Seeder;
use \Faker\Factory as Faker;

class UserTableSeeder extends Seeder{

    /**
     *
     */
    public function run(){

        \DB::table('users')->insert(array(
            'name' => 'Administrador uno',
            'email' => 'admin',
            'password' => \Illuminate\Support\Facades\Hash::make('admin'),
            'id_perfil'=>'1'
        ));

        $faker = Faker::create();

        for($i=0;$i<50;$i++){
            \DB::table('users')->insert(array(
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => \Illuminate\Support\Facades\Hash::make('secret'),
                'id_perfil'=>'1'
            ));
        }
    }

}