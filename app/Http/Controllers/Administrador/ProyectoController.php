<?php

namespace App\Http\Controllers\Administrador;

use App\Proyecto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function fncProyectoVista()
    {
        return view('Administrador.Proyecto.ProyectoVista');
    }

    public function fncRegistrarProyectoVista()
    {
        return view('Administrador.Proyecto.RegistrarProyectoVista');
    }

    public function fncEditarProyectoVista($id)
    {
        $id_proyecto = $id;
        return view('Administrador.Proyecto.EditarProyectoVista', compact('id_proyecto'));
    }

    public function fncListarProyectosJson()
    {
        $resultado = false;
        $proyecto_lista = "";
        $mensaje_error = "";
        try {
            $proyecto_lista = Proyecto::fncListarProyectos();
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $proyecto_lista, 'mensaje' => $mensaje_error]);
    }

    public function fncRegistrarProyectoJson(Request $request)
    {
        $resultado = false;
        $proyectos = "";
        $mensaje_error = "";
        try {
            $proyectos = Proyecto::fncRegistrarProyecto($request);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $proyectos, 'mensaje' => $mensaje_error]);

    }

    public function fncEditarProyectoJson(Request $request)
    {
        $PROid_proyecto = $request->input('PROid_proyecto');
        $resultado = false;
        $proyecto = "";
        $mensaje_error = "";
        try {
            $proyecto = Proyecto::fncEditarProyecto($PROid_proyecto);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $proyecto, 'mensaje' => $mensaje_error]);
    }

    public function fncModificarProyectoJson(Request $request)
    {
        $this->validate($request,[
            'USUid_usuario' => 'required',
            'PROnombre_proyecto' => 'required'
        ]);

        $resultado = false;
        $proyectos = "";
        $mensaje_error = "";
        try {
            $proyectos = Proyecto::fncModificarProyecto($requesst);
            $resultado = true;
        } catch (\Exception $ex) {
            $mensaje_error = $ex;
        }
        return response()->json(['estado' => $resultado, 'data' => $proyectos, 'mensaje' => $mensaje_error]);
    }
}
