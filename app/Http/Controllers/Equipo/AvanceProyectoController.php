<?php

namespace App\Http\Controllers\Equipo;

use App\TareaEntregable;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AvanceProyectoController extends Controller
{
    public function AvanceControllerVista($PROid_proyecto)
    {
        return view('Equipo.AvanceProyecto.AvanceProyectoVista',compact('PROid_proyecto'));
    }

    public function fncObtenerTareasAvanceJson(Request $request)
    {
        $resultado = false;
        $tarea_equipo = "";
        $mensaje_error = "";
        try {
            $tarea_equipo = TareaEntregable::fncObtenerTareasAvance($request);
            $resultado = true;
        } catch (QueryException $ex) {
            $mensaje_error = $ex->errorInfo;
        }
        return response()->json(['estado' => $resultado, 'data' => $tarea_equipo, 'mensaje' => $mensaje_error]);
    }
}
