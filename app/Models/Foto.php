<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model {

    protected $table = 'fotos';
    protected $primaryKey='id_foto';

   /* public function getFullDomicilioAttribute(){
        return $this->calle." ".$this->numero;
    }*/

    public function render($width,$height){
        return "<img src='/fotos/".$this->path."'  class='img-thumbnail'  width='".$width."' height='".$height."'>";

    }


}
