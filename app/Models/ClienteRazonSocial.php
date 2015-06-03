<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClienteRazonSocial extends Model {

    protected $table = 'clientes_razones_sociales';
    protected $primaryKey='id_razon_social';

    public function categoriaRazonSocial(){
        return $this->hasOne('App\Models\CategoriaRazonSocial', 'id_categoria_raz_soc', 'id_categoria_raz_soc');
    }
    /* public function getFullDomicilioAttribute(){
         return $this->calle." ".$this->numero;
     }*/

}
