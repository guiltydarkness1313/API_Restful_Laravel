<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

// Necesitaremos el modelo Avion para ciertas tareas.
use App\Avion;

class AvionController extends Controller {

    public function index()
    {
        // Devolverá todos los aviones.

        return response()->json(['status'=>'ok','data'=>Avion::all()], 200);
    }

    public function show($id)
    {
        //
        // return "Se muestra Avión  con id: $id";
        // Buscamos un avion por el id.
        $avion=Avion::find($id);

        // Si no existe ese avion devolvemos un error.
        if (!$avion)
        {
            // Se devuelve un array errors con los errores encontrados y cabecera HTTP 404.
            // En code podríamos indicar un código de error personalizado de nuestra aplicación si lo deseamos.
            return response()->json(['errors'=>array(['code'=>404,'message'=>'No se encuentra un avión con ese código.'])],404);
        }

        return response()->json(['status'=>'ok','data'=>$avion],200);
    }

}
