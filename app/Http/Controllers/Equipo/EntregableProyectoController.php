<?php

namespace App\Http\Controllers\Equipo;

use App\EntregableProyecto;
use App\Fase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EntregableProyectoController extends Controller
{
    public function fncListarEntregableProyectoJson(Request $request)
    {
        $resultado = false;
        $entregable_proyecto = "";
        $mensaje_error = "";
        try {
            $entregable_proyecto = EntregableProyecto::fncListarEntregableProyecto($request);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $entregable_proyecto, 'mensaje' => $mensaje_error]);
    }

    public function fncListarFasesProyectoJson(Request $request)
    {
        $resultado = false;
        $fases_proyecto = "";
        $mensaje_error = "";
        try {
            $fases_proyecto = Fase::fncListrarFasesProyecto($request);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $fases_proyecto, 'mensaje' => $mensaje_error]);
    }

    public function fncRegistrarEntregableProyectoJson(Request $request)
    {
        $resultado = false;
        $entregable_proyecto = "";
        $mensaje_error = "";
        try {
            $entregable_proyecto = EntregableProyecto::fncRegistrarEntregableProyecto($request);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $entregable_proyecto, 'mensaje' => $mensaje_error]);
    }

    public function fncCambiarEstadoEntregableProyectoJson(Request $request)
    {
        $resultado = false;
        $mensaje_error = "";
        try {
            $resultado = EntregableProyecto::fncCambiarEstadoEntregableProyecto($request);
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'mensaje' => $mensaje_error]);
    }
}
