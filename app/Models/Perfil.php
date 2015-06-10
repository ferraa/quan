<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfiles';
    protected $primaryKey='id_perfil';


    public function operaciones(){
        return $this->belongsToMany('App\Models\SistemaOperacion','perfiles_operaciones','id_perfil','id_sistema_operacion');
    }

    public function tieneOperacion($idOperacion){
        return $this->operaciones->find($idOperacion);
        //return true;
    }

}

