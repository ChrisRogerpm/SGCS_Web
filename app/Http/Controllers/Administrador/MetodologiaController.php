<?php

namespace App\Http\Controllers\Administrador;

use App\Metodologia;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MetodologiaController extends Controller
{
    public function fncMetodologiaVista()
    {
        return view('Administrador.Metodologia.MetodologiaVista');
    }

    public function fncRegistrarMetodologiaVista()
    {
        return view('Administrador.Metodologia.RegistrarMetodologiaVista');
    }

    public function fncEditarMetodologiaVista($id)
    {
        $id_metodologia = $id;
        return view('Administrador.Metodologia.EditarMetodologiaVista',compact('id_metodologia'));
    }

    public function fncListarMetodologiasJson()
    {
        $resultado = false;
        $Metodologia_lista = "";
        $mensaje_error = "";
        try {
            $Metodologia_lista = Metodologia::fncListarMetodologias();
            $resultado = true;
        } catch (QueryException $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $Metodologia_lista, 'mensaje' => $mensaje_error]);
    }

    public function fncRegistrarMetodologiaJson(Request $request)
    {
        $resultado = false;
        $Metodologias = "";
        $mensaje_error = "";
        try {
            $Metodologias = Metodologia::fncRegistrarMetodologia($request);
            $resultado = true;
        } catch (QueryException $ex) {
            $mensaje_error = $ex->getMessage();
        }
        return response()->json(['estado' => $resultado, 'data' => $Metodologias, 'mensaje' => $mensaje_error]);

    }

    public function fncEditarMetodologiaJson(Request $request)
    {
        $METid_metodologia = $request->input('METid_metodologia');
        $resultado = false;
        $Metodologia = "";
        $mensaje_error = "";
        try {
            $Metodologia = Metodologia::fncEditarMetodologia($METid_metodologia);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $Metodologia, 'mensaje' => $mensaje_error]);
    }

    public function fncModificarMetodologiaJson(Request $request)
    {
        $resultado = false;
        $Metodologias = "";
        $mensaje_error = "";
        try {
            $Metodologias = Metodologia::fncModificarMetodologia($request);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $Metodologias, 'mensaje' => $mensaje_error]);
    }
}
