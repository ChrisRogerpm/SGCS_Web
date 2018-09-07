<?php

namespace App\Http\Controllers\Equipo;

use App\Proyecto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProyectoEncargadoController extends Controller
{
    public function fncProyectoEncargadoVista()
    {
        return view('Equipo.ProyectoEncargado.ProyectoEncargadoVista');
    }

    public function fncProyectoEncargadoJson()
    {
        $resultado = false;
        $proyecto_entregable = "";
        $mensaje_error = "";
        try {
            $proyecto_entregable = Proyecto::fncProyectoEncargado();
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $proyecto_entregable, 'mensaje' => $mensaje_error]);
    }
}
