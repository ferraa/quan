<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{



    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clientes';
    protected $primaryKey='id_cliente';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   // protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
  //  protected $hidden = ['password', 'remember_token'];


    public function foto(){
        return $this->hasOne('App\Models\Foto','id_foto','id_foto');
    }
    public function getFullNameAttribute(){
        if(is_null($this->denominacion))
            return $this->nombres." ".$this->apellidos;
        else
            return $this->denominacion;
    }
    public function getTipoClienteAttribute(){
        if(is_null($this->denominacion))
            return "Persona";
        else
            return "Empresa";
    }
    public function domicilios(){
        return $this->belongsToMany('App\Models\Domicilio','clientes_domicilios','id_cliente','id_domicilio');
    }

    public function contactos(){
        return $this->belongsToMany('App\Models\Contacto','clientes_contactos','id_cliente','id_contacto');
    }

    public function razonesSociales(){
        return $this->hasMany('App\Models\ClienteRazonSocial', 'id_cliente', 'id_cliente');
    }
}