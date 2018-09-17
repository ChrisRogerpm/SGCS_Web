<?php

namespace App\Http\Controllers\Equipo;

use App\Metodologia;
use App\Proyecto;
use App\UsuarioProyecto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProyectoEncargadoController extends Controller
{
    public function fncProyectoEncargadoVista()
    {
        return view('Equipo.ProyectoEncargado.ProyectoEncargadoVista');
    }

    public function fncInformacionProyectoEncargadoVista($PROid_proyecto)
    {
        $proyecto_id = $PROid_proyecto;
        return view('Equipo.ProyectoEncargado.InformacionProyectoEncargado', compact('proyecto_id'));
    }

    public function fncProyectoEncargadoJson()
    {
        $resultado = false;
        $proyecto_encargado = "";
        $mensaje_error = "";
        try {
            $proyecto_encargado = Proyecto::fncProyectoEncargado();
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $proyecto_encargado, 'mensaje' => $mensaje_error]);
    }

    public function fncInformacionProyectoEncargadoJson(Request $request)
    {
        $resultado = false;
        $metodologia_proyecto = false;
        $usuario_proyecto_total = "";
        $proyecto_encargado = "";
        $mensaje_error = "";
        try {
            $proyecto_encargado = Proyecto::fncProyectoEncargadoInformacion($request);
            $metodologia_proyecto = Proyecto::fncValidarProyectoMetodlogia($request);
            $usuario_proyecto_total = UsuarioProyecto::fncUsuarioProyectoTotal($request);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json([
            'estado' => $resultado,
            'data' => $proyecto_encargado,
            'mensaje' => $mensaje_error,
            'usuario_proyecto_total' => $usuario_proyecto_total,
            'metodologia_proyecto' => $metodologia_proyecto
        ]);
    }

    public function fncListarMetodologiasProyectoJson()
    {
        $resultado = false;
        $Metodologia_lista = "";
        $mensaje_error = "";
        try {
            $Metodologia_lista = Metodologia::fncListarMetodologias();
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json([
            'estado' => $resultado,
            'data' => $Metodologia_lista,
            'mensaje' => $mensaje_error
        ]);
    }
}
