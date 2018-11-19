<?php

namespace App\Http\Controllers\Equipo;

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
}
