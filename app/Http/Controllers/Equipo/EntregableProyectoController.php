<?php

namespace App\Http\Controllers\Equipo;

use App\EntregableProyecto;
use App\Fase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EntregableProyectoController extends Controller
{
    public function fncListarEntregableProyecto(Request $request)
    {
        $resultado = false;
        $entregable_proyecto = "";
        $fases_proyecto = "";
        $mensaje_error = "";
        try {
            $entregable_proyecto = EntregableProyecto::fncListarEntregableProyecto($request);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $entregable_proyecto, 'mensaje' => $mensaje_error]);
    }

    public function fncListarFasesProyecto(Request $request)
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
}
