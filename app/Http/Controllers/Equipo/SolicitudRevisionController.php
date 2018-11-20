<?php

namespace App\Http\Controllers\Equipo;

use App\TareaEntregableHistorial;
use App\TareaEntregableRevision;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SolicitudRevisionController extends Controller
{
    public function fncSolicitudRevisionVista($PROid_proyecto)
    {
        return view('Equipo.SolicitudRevision.SolicitudRevisionVista', compact('PROid_proyecto'));
    }

    public function fncListarSolicitudRevisionJson(Request $request)
    {
        $lista = "";
        $respuesta = false;
        $mensaje_error = "";
        try {
            $lista = TareaEntregableRevision::fncListarTareaRevisionProyecto($request);
            $respuesta = true;
        } catch (QueryException $ex) {
            $mensaje_error = $ex->errorInfo;
        }
        return response()->json(['respuesta' => $respuesta, 'data' => $lista, 'mensaje' => $mensaje_error]);
    }

    public function fncRegistrarTareaEntregableHistorialJson(Request $request)
    {
        $resultado = 0;
        $mensaje_error = "";
        try {
//            $resultado = TareaEntregableHistorial::fncRegistrarTareaEntregableHistorial($request);
            $TAREid_revision = $request->input('TAREid_revision');
            try {
                $data = TareaEntregableHistorial::where('TAREid_revision', $TAREid_revision)->first();
                $resultado = $data->TAREid_revision;
            } catch (QueryException $ex) {
            }
        } catch (QueryException $ex) {
            $mensaje_error = $ex->errorInfo;
        }
        return response()->json(['respuesta' => $resultado, 'mensaje' => $mensaje_error]);
    }

}
