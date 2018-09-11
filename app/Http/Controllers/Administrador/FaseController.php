<?php

namespace App\Http\Controllers\Administrador;

use App\Fase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaseController extends Controller
{
    public function fncFaseVista()
    {
        return view('Administrador.Fase.FaseVista');
    }

    public function fncRegistrarFaseVista()
    {
        return view('Administrador.Fase.RegistrarFaseVista');
    }

    public function fncEditarFaseVista($id)
    {
        $id_fase = $id;
        return view('Administrador.Fase.EditarFaseVista', compact('id_fase'));
    }

    public function fncListarFasesJson()
    {
        $resultado = false;
        $Fase_lista = "";
        $mensaje_error = "";
        try {
            $Fase_lista = Fase::fncListarFases();
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $Fase_lista, 'mensaje' => $mensaje_error]);
    }

    public function fncListarFasesFiltroJson(Request $request)
    {
        $resultado = false;
        $Fase_lista = "";
        $mensaje_error = "";
        try {
            $Fase_lista = Fase::fncListrarFasesFiltro($request);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $Fase_lista, 'mensaje' => $mensaje_error]);
    }

    public function fncRegistrarFaseJson(Request $request)
    {
        $resultado = false;
        $Fases = "";
        $mensaje_error = "";
        try {
            $Fases = Fase::fncRegistrarFase($request);
            if ($Fases != null) {
                $resultado = true;
            }
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $Fases, 'mensaje' => $mensaje_error]);

    }

    public function fncEditarFaseJson(Request $request)
    {
        $FAid_fase = $request->input('FAid_fase');
        $resultado = false;
        $Fase = "";
        $mensaje_error = "";
        try {
            $Fase = Fase::fncEditarFase($FAid_fase);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $Fase, 'mensaje' => $mensaje_error]);
    }

    public function fncModificarFaseJson(Request $request)
    {
        $resultado = false;
        $Fases = "";
        $mensaje_error = "";
        try {
            $Fases = Fase::fncModificarFase($request);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $Fases, 'mensaje' => $mensaje_error]);
    }
}
