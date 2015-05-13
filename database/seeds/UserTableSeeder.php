<?php

use \Illuminate\Database\Seeder;
use \Faker\Factory as Faker;

class UserTableSeeder extends Seeder{

    /**
     *
     */
    public function run(){

        $faker = Faker::create();

        for($i=0;$i<50;$i++){
            \DB::table('users')->insert(array(
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => \Illuminate\Support\Facades\Hash::make('secret')
            ));
        }
    }

}