<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    // Nombre de la tabla en MySQL.
    protected $table="fabricantes";

    // Atributos que se pueden asignar de manera masiva.
    protected $fillable = array('nombre','direccion','telefono');

    // Aquí ponemos los campos que no queremos que se devuelvan en las consultas.
    protected $hidden = ['created_at','updated_at'];

    // Relación de Fabricante con Aviones:
    public function aviones()
    {
        // 1 fabricante tiene muchos aviones
        return $this->hasMany('App\Avion');
    }


}
