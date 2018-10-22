<?php

namespace App\Http\Controllers\Equipo;

use App\EntregableProyecto;
use App\TareaEntregable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TareaEntregableController extends Controller
{
    public function fncTareaEntregableVista($PROid_proyecto)
    {
        return view('Equipo.Tareas.TareaEntregableVista', compact('PROid_proyecto'));
    }

    public function fncRegistrarTareaEntregableVista($PROid_proyecto)
    {
        return view('Equipo.Tareas.RegistrarTareaEntregable', compact('PROid_proyecto'));
    }

    public function fncEditarTareaEntregableVista($TAid_tarea)
    {
        return view('Equipo.Tareas.EditarTareaEntregable', compact('TAid_tarea'));
    }

    public function fncRegistrarTareaVista()
    {
        return view('Equipo.Tareas.GestionTareas.RegistrarTareaVista');
    }

    public function fncEditarTareaVista()
    {
        return view('Equipo.Tareas.GestionTareas.EditarTareaVista');
    }

    public function fncListarTareaEntregableJson(Request $request)
    {
        $resultado = false;
        $tarea_entregable = "";
        $mensaje_error = "";
        try {
            $tarea_entregable = TareaEntregable::fncListarTareaEntregable($request);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $tarea_entregable, 'mensaje' => $mensaje_error]);
    }

    public function fncRegistrarTareaEntregableJson(Request $request)
    {
        $resultado = false;
        $mensaje_error = "";
        try {
            $resultado = TareaEntregable::fncRegistrarTareaEntregable($request);
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'mensaje' => $mensaje_error]);
    }

    public function fncObtenerTareaEntregableJson(Request $request)
    {
        $resultado = false;
        $tarea_entregable = "";
        $mensaje_error = "";
        try {
            $tarea_entregable = TareaEntregable::fncObtenerTareaEntregable($request);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $tarea_entregable, 'mensaje' => $mensaje_error]);
    }

    public function fncModificarTareaEntregableJson(Request $request)
    {
        $resultado = false;
        $mensaje_error = "";
        try {
            $resultado = TareaEntregable::fncModificarTareaEntregable($request);
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'mensaje' => $mensaje_error]);
    }

    public function fncListarTareaFiltroEntregbleJson(Request $request)
    {
        $resultado = false;
        $tarea_entregable = "";
        $mensaje_error = "";
        try {
            $tarea_entregable = TareaEntregable::fncListarTareaFiltroEntregble($request);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $tarea_entregable, 'mensaje' => $mensaje_error]);
    }

    public function fncRegistrarRelacionTareaEntregable()
    {

    }


}
