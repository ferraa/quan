<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model {


    protected $table = 'domicilios';
    protected $primaryKey='id_domicilio';

    public function getFullDomicilioAttribute(){
        return $this->calle." ".$this->numero;
            }
}
