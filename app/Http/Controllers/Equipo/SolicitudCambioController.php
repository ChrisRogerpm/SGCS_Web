<?php

namespace App\Http\Controllers\Equipo;

use App\SolicitudCambio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SolicitudCambioController extends Controller
{
    public function fncSolicituCambioVista()
    {
        return view('Equipo.SolicituCambio.SolicitudCambioVista');
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
