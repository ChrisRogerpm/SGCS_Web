<?php

namespace App\Http\Controllers\Equipo;

use App\ComiteCambio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComiteCambioController extends Controller
{
    public function fncComiteCambioVista($PROid_proyecto)
    {
        return view('Equipo.ComiteCambio.ComiteCambioVista',compact('PROid_proyecto'));
    }

    public function fncRegistrarComiteCambioProyectoJson(Request $request)
    {
        $resultado = false;
        $comite_cambio = "";
        $mensaje_error = "";
        try {
            $comite_cambio = ComiteCambio::fncRegistrarComiteCambioProyecto($request);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $comite_cambio, 'mensaje' => $mensaje_error]);
    }

    public function fncListarComiteCambioJson(Request $request)
    {
        $resultado = false;
        $comite_cambio = "";
        $mensaje_error = "";
        try {
            $comite_cambio = ComiteCambio::fncListarComiteCambio($request);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $comite_cambio, 'mensaje' => $mensaje_error]);
    }

    public function fncCambiarEstadoComiteCambioProyectoJson(Request $request)
    {
        $resultado = false;
        $mensaje_error = "";
        try {
            $resultado = ComiteCambio::fncCambiarEstadoComiteCambioProyecto($request);
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'mensaje' => $mensaje_error]);
    }
}
