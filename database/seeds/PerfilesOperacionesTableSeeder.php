<?php

use \Illuminate\Database\Seeder;

class PerfilesOperacionesTableSeeder extends Seeder{

    /**
     *
     */
    public function run(){

        \DB::table('perfiles_operaciones')->insert(array(
            'id_perfil' => '1',
            'id_sistema_operacion' => '1',

        ));

        \DB::table('perfiles_operaciones')->insert(array(
            'id_perfil' => '1',
            'id_sistema_operacion' => '2',

        ));

        \DB::table('perfiles_operaciones')->insert(array(
            'id_perfil' => '1',
            'id_sistema_operacion' => '3',

        ));
        \DB::table('perfiles_operaciones')->insert(array(
            'id_perfil' => '1',
            'id_sistema_operacion' => '4',

        ));

        \DB::table('perfiles_operaciones')->insert(array(
            'id_perfil' => '1',
            'id_sistema_operacion' => '5',

        ));

        \DB::table('perfiles_operaciones')->insert(array(
            'id_perfil' => '1',
            'id_sistema_operacion' => '6',

        ));

        \DB::table('perfiles_operaciones')->insert(array(
            'id_perfil' => '1',
            'id_sistema_operacion' => '7',

        ));

        \DB::table('perfiles_operaciones')->insert(array(
            'id_perfil' => '1',
            'id_sistema_operacion' => '8',

        ));


        \DB::table('perfiles_operaciones')->insert(array(
            'id_perfil' => '2',
            'id_sistema_operacion' => '1',

        ));

        \DB::table('perfiles_operaciones')->insert(array(
            'id_perfil' => '2',
            'id_sistema_operacion' => '2',

        ));

        \DB::table('perfiles_operaciones')->insert(array(
            'id_perfil' => '2',
            'id_sistema_operacion' => '5',

        ));
        \DB::table('perfiles_operaciones')->insert(array(
            'id_perfil' => '2',
            'id_sistema_operacion' => '6',

        ));


        \DB::table('perfiles_operaciones')->insert(array(
            'id_perfil' => '3',
            'id_sistema_operacion' => '1',

        ));

        \DB::table('perfiles_operaciones')->insert(array(
            'id_perfil' => '3',
            'id_sistema_operacion' => '5',

        ));








    }

}