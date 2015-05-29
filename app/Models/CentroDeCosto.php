<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CentroDeCosto extends Model {

    protected $table = 'centros_de_costo';
    protected $primaryKey='id_centro_de_costo';

    public function detalles(){
        return $this->hasMany('App\Models\CentroDeCostoDetalle', 'id_centro_de_costo', 'id_centro_de_costo');
    }

    /* public function getFullDomicilioAttribute(){
         return $this->calle." ".$this->numero;
     }*/

}
