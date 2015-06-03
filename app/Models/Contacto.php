<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model {

    protected $table = 'contactos';
    protected $primaryKey='id_contacto';

    public function getFullNameAttribute(){
        return $this->nombre." ".$this->apellido;
    }

    public function foto(){
        return $this->hasOne('App\Models\Foto','id_foto','id_foto');
    }
}
