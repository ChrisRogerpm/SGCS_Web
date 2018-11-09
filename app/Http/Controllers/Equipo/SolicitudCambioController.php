<?php

namespace App\Http\Controllers\Equipo;

use App\SolicitudCambio;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SolicitudCambioController extends Controller
{
    public function fncSolicituCambioVista($PROid_proyecto)
    {
        return view('Equipo.SolicituCambio.SolicitudCambioVista', compact('PROid_proyecto'));
    }

    public function fncListarSolicitudCambio(Request $request)
    {
        $resultado = false;
        $SolicitudCambio = "";
        $mensaje_error = "";
        try {
            $SolicitudCambio = SolicitudCambio::fncListarComiteCambio($request);
            $resultado = true;
        } catch (QueryException $ex) {
            $mensaje_error = $ex->errorInfo;
        }
        return response()->json(['estado' => $resultado, 'data' => $SolicitudCambio, 'mensaje' => $mensaje_error]);
    }

    public function fncObtenerSolicitudCambioJson(Request $request)
    {
        $resultado = "";
        $mensaje_error = "";
        try {
            $resultado = SolicitudCambio::fncObtenerSolicitudCambio($request);
        } catch (QueryException $ex) {
            $mensaje_error = $ex->errorInfo;
        }

        return response()->json(['data' => $resultado, 'mensaje' => $mensaje_error]);
    }
}
