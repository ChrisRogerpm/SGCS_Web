<?php

namespace App\Http\Controllers\Equipo;

use App\AsignarTareaEntregable;
use App\SolicitudCambio;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;

class SolicitudCambioController extends Controller
{
    public function fncSolicituCambioVista($PROid_proyecto)
    {
        return view('Equipo.SolicituCambio.SolicitudCambioVista', compact('PROid_proyecto'));
    }

    public function fncRegistrarSolicitudCambioVista()
    {
        return view('Equipo.SolicituCambio.RegistrarSolicitudCambio');
    }
    public function fncRegistrarSolicitudCambioJson(Request $request){
        $resultado = false;
        $mensaje_error = "";
        try {
            $resultado = SolicitudCambio::fncRegistrarSolicitudCambio($request);
        } catch (QueryException $ex) {
            $mensaje_error = $ex->getMessage();
        }
        return response()->json(['respuesta' => $resultado,  'mensaje' => $mensaje_error]);
    }

    public function fncListarSolicitudCambioUsuarioJson()
    {
        $resultado = false;
        $SolicitudCambio = '';
        $mensaje_error = '';
        try {
            $SolicitudCambio = SolicitudCambio::fncListarSolicitudCambioUsuario();
            $resultado = true;
        } catch (QueryException $ex) {
            $mensaje_error = $ex->errorInfo;
        }
        return response()->json(['estado' => $resultado, 'data' => $SolicitudCambio, 'mensaje' => $mensaje_error]);
    }

    public function fncListarProyectosTareaAsignadaJson()
    {
        $resultado = false;
        $proyectos = '';
        $mensaje_error = '';
        try {
            $proyectos = AsignarTareaEntregable::fncProyectoTareaAsignadaUsuario();
            $resultado = true;
        } catch (QueryException $ex) {
            $mensaje_error = $ex->errorInfo;
        }
        return response()->json(['estado' => $resultado, 'data' => $proyectos, 'mensaje' => $mensaje_error]);
    }

    public function fncListarTareaAsignadaProyectoJson(Request $request)
    {
        $resultado = false;
        $tareas = '';
        $mensaje_error = '';
        try {
            $tareas = AsignarTareaEntregable::fncTareasAsignadaUsuario($request);
            $resultado = true;
        } catch (QueryException $ex) {
            $mensaje_error = $ex->errorInfo;
        }
        return response()->json(['estado' => $resultado, 'data' => $tareas, 'mensaje' => $mensaje_error]);
    }

    public function fncListarSolicitudCambio(Request $request)
    {
        $resultado = false;
        $SolicitudCambio = '';
        $mensaje_error = '';
        try {
            $SolicitudCambio = SolicitudCambio::fncListarSolicitudCambio($request);
            $resultado = true;
        } catch (QueryException $ex) {
            $mensaje_error = $ex->errorInfo;
        }
        return response()->json(['estado' => $resultado, 'data' => $SolicitudCambio, 'mensaje' => $mensaje_error]);
    }

    public function fncObtenerSolicitudCambioJson(Request $request)
    {
        $resultado = '';
        $mensaje_error = '';
        try {
            $resultado = SolicitudCambio::fncObtenerSolicitudCambio($request);
        } catch (QueryException $ex) {
            $mensaje_error = $ex->errorInfo;
        }

        return response()->json(['data' => $resultado, 'mensaje' => $mensaje_error]);
    }

    public function fncEvaluarSolicitudCambioJson(Request $request)
    {
        $resultado = '';
        $mensaje_error = '';
        try {
            $resultado = SolicitudCambio::fncEvaluarSolicitudCambio($request);
        } catch (QueryException $ex) {
            $mensaje_error = $ex->errorInfo;
        }
        return response()->json(['respuesta' => $resultado, 'mensaje' => $mensaje_error]);
    }
}
