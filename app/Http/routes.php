<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

//Route::get('home', 'HomeController@index');

/*Route::get('clientes',function(){
   $cliente= App\Models\Cliente::find(1);
   //$todos=$todos->full_domicilio;

    //dd($domicilios);
    return view('domicilios', array('cliente'=>$cliente));
});*/

Route::controllers([
    'user'  => 'UserController',
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',

]);

Route::resource('clientes','Cliente\ClienteController');

Route::resource('centros','Proveedor\CentroDeCostoController');

Route::resource('proveedores','Proveedor\ProveedorController');

Route::resource('facturacion','Facturacion\FacturacionController');

Route::group(['prefix'=>'admin', 'namespace'=>'Admin'],function(){

    Route::resource('users','UsersController');
    Route::resource('perfiles','PerfilesController');
});

Route::resource('excel','ExcelController');