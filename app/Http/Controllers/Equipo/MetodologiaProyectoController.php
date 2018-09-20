<?php

namespace App\Http\Controllers\Equipo;

use App\Metodologia;
use App\MetodologiaProyecto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MetodologiaProyectoController extends Controller
{
    public function fncRegistrarMetodologiaProyecto(Request $request)
    {
        $resultado = false;
        $MetodologiaProyecto = "";
        $mensaje_error = "";
        try {
            $MetodologiaProyecto = MetodologiaProyecto::fncRegistrarMetodologiaProyecto($request);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $MetodologiaProyecto, 'mensaje' => $mensaje_error]);
    }
}
