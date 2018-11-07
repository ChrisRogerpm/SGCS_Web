<?php

namespace App\Http\Controllers\Equipo;

use App\SolicitudCambio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SolicitudCambioController extends Controller
{
    public function fncSolicituCambioVista($PROid_proyecto)
    {
        return view('Equipo.SolicituCambio.SolicitudCambioVista',compact('PROid_proyecto'));
    }

    public function fncListarSolicitudCambio(Request $request)
    {
        $resultado = false;
        $SolicitudCambio = "";
        $mensaje_error = "";
        try {
            $SolicitudCambio = SolicitudCambio::fncListarComiteCambio($request);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex->getMessage();
        }
        return response()->json(['estado' => $resultado, 'data' => $SolicitudCambio, 'mensaje' => $mensaje_error]);
    }
}
