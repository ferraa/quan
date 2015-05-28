<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaRazonSocial extends Model {

    protected $table = 'categorias_razones_sociales';
    protected $primaryKey='id_categoria_raz_soc';

    /* public function getFullDomicilioAttribute(){
         return $this->calle." ".$this->numero;
     }*/

}
