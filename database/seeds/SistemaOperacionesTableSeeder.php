<?php

use \Illuminate\Database\Seeder;

class SistemaOperacionesTableSeeder extends Seeder{

    /**
     *
     */
    public function run(){

        \DB::table('sistema_operaciones')->insert(array(
            'descripcion' => 'Listar Clientes',
            'path' => '/clientes',
            'method' => 'GET',

        ));
        \DB::table('sistema_operaciones')->insert(array(
            'descripcion' => 'Ver Cliente',
            'path' => '/clientes/*',
            'method' => 'GET',

        ));
        \DB::table('sistema_operaciones')->insert(array(
            'descripcion' => 'Editar Cliente',
            'path' => '/clientes/*/edit',
            'method' => 'GET',

        ));
        \DB::table('sistema_operaciones')->insert(array(
            'descripcion' => 'Borrar Cliente',
            'path' => '/clientes/*',
            'method' => 'DELETE',

        ));

        \DB::table('sistema_operaciones')->insert(array(
            'descripcion' => 'Listar Proveedores',
            'path' => '/proveedores',
            'method' => 'GET',

        ));
        \DB::table('sistema_operaciones')->insert(array(
            'descripcion' => 'Ver Proveedor',
            'path' => '/proveedores/*',
            'method' => 'GET',

        ));
        \DB::table('sistema_operaciones')->insert(array(
            'descripcion' => 'Editar Proveedor',
            'path' => '/proveedores/*/edit',
            'method' => 'GET',

        ));
        \DB::table('sistema_operaciones')->insert(array(
            'descripcion' => 'Borrar Proveedor',
            'path' => '/proveedores/*',
            'method' => 'DELETE',

        ));




    }

}