<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProveedorRazonSocial extends Model {

    protected $table = 'proveedores_razones_sociales';
    protected $primaryKey='id_razon_social';



    public function categoriaRazonSocial(){
        return $this->hasOne('App\Models\CategoriaRazonSocial', 'id_categoria_raz_soc', 'id_categoria_raz_soc');
    }

}
