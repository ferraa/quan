<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'proveedores';
    protected $primaryKey='id_proveedor';

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
    public function getTipoProveedorAttribute(){
        if(is_null($this->denominacion))
            return "Persona";
        else
            return "Empresa";
    }
    public function domicilios(){
        return $this->belongsToMany('App\Models\Domicilio','proveedores_domicilios','id_proveedor','id_domicilio');
    }

    public function contactos(){
        return $this->belongsToMany('App\Models\Contacto','proveedores_contactos','id_proveedor','id_contacto');
    }

    public function razonesSociales(){
        return $this->hasMany('App\Models\ProveedorRazonSocial', 'id_proveedor', 'id_proveedor');
    }

    public function centrosDeCostoDetalle(){
        return $this->belongsToMany('App\Models\CentroDeCostoDetalle','proveedores_centros_de_costo_detalle','id_proveedor','id_centro_de_costo_detalle');
    }

}
