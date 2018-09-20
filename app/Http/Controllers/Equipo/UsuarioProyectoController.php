<?php

namespace App\Http\Controllers\Equipo;

use App\UsuarioProyecto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuarioProyectoController extends Controller
{
    //
    public function fncListarUsuarioProyectoJson(Request $request)
    {
        $resultado = false;
        $usuario_proyecto = "";
        $mensaje_error = "";
        try {
            $usuario_proyecto = UsuarioProyecto::fncListarUsuarioProyecto($request);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $usuario_proyecto, 'mensaje' => $mensaje_error]);
    }

    public function fncRegistrarUsuarioProyectoJson(Request $request)
    {
        $resultado = false;
        $usuario_proyecto = "";
        $mensaje_error = "";
        try {
            $usuario_proyecto = UsuarioProyecto::fncRegistrarUsuarioProyecto($request);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $usuario_proyecto, 'mensaje' => $mensaje_error]);
    }
}
