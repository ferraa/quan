<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CentroDeCostoDetalle extends Model {

    protected $table = 'centros_de_costo_detalles';
    protected $primaryKey='id_centro_de_costo_detalle';

    public function centroDeCosto(){
        return $this->hasOne('App\Models\CentroDeCosto','id_centro_de_costo','id_centro_de_costo');
    }


     public function getFullNameAttribute(){
         return $this->centroDeCosto->descripcion." - ".$this->detalle;
     }
}
