<?php

namespace App\Http\Controllers\Administrador;

use App\Entregable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EntregableController extends Controller
{
    public function fncEntregableVista()
    {
        return view('Administrador.Entregable.EntregableVista');
    }

    public function fncRegistrarEntregableVista()
    {
        return view('Administrador.Entregable.RegistrarEntregableVista');
    }

    public function fncEditarEntregableVista()
    {
        return view('Administrador.Entregable.EditarEntregableVista');
    }

    public function fncListarEntregablesJson()
    {
        $resultado = false;
        $Entregable_lista = "";
        $mensaje_error = "";
        try {
            $Entregable_lista = Entregable::fncListarEntregables();
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $Entregable_lista, 'mensaje' => $mensaje_error]);
    }

    public function fncListarEntregableFaseFiltroJson(Request $request)
    {
        $resultado = false;
        $Entregable_lista = "";
        $mensaje_error = "";
        try {
            $Entregable_lista = Entregable::fncListarEntregableFaseFiltro($request);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $Entregable_lista, 'mensaje' => $mensaje_error]);
    }

    public function fncRegistrarEntregableJson(Request $request)
    {
        $resultado = false;
        $Entregables = "";
        $mensaje_error = "";
        try {
            $Entregables = Entregable::fncRegistrarEntregable($request);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $Entregables, 'mensaje' => $mensaje_error]);

    }

    public function fncEditarEntregableJson(Request $request)
    {
        $ENTRid_entregable = $request->input('ENTRid_entregable');
        $resultado = false;
        $Entregable = "";
        $mensaje_error = "";
        try {
            $Entregable = Entregable::fncEditarEntregable($ENTRid_entregable);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $Entregable, 'mensaje' => $mensaje_error]);
    }

    public function fncModificarEntregableJson(Request $request)
    {
        $resultado = false;
        $Entregables = "";
        $mensaje_error = "";
        try {
            $Entregables = Entregable::fncModificarEntregable($request);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $Entregables, 'mensaje' => $mensaje_error]);
    }
}
