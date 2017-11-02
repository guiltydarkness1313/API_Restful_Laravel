<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avion extends Model
{
    // Nombre de la tabla en MySQL.
    protected $table='aviones';

    // Eloquent asume que cada tabla tiene una clave primaria con una columna llamada id.
    // Si éste no fuera el caso entonces hay que indicar cuál es nuestra clave primaria en la tabla:
    protected $primaryKey = 'serie';

    // Atributos que se pueden asignar de manera masiva.
    protected $fillable = array('modelo','longitud','capacidad','velocidad','alcance');

    // Aquí ponemos los campos que no queremos que se devuelvan en las consultas.
    protected $hidden = ['created_at','updated_at'];

    // Relación de Avión con Fabricante:
    public function fabricante(){
        // 1 avión pertenece a un Fabricante.
        return $this->belongsTo('App\Fabricante');
    }

}
