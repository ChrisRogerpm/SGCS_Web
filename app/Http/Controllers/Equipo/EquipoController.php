<?php

namespace App\Http\Controllers\Equipo;

use App\Mail\NotificarTarea;
use App\Reporte;
use App\TareaEntregable;
use App\UsuarioProyecto;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class EquipoController extends Controller
{
    public function fncMostrarEquipo()
    {
        return view('Equipo.Dashboard.index');
    }

    public function fncListarDataReporteDashboardJson()
    {
        $respuesta = false;
        $resultado = '';
        $data = '';
        try {
            $data = Reporte::fncListarReporteDashboard();
            $respuesta = true;
        } catch (QueryException $ex) {
            $resultado = $ex->errorInfo;
        }
        return response()->json(['data' => $data, 'respuesta' => $respuesta, 'mensaje' => $resultado]);
    }

    public function fncObtenerTotalTareasFinalizadasJson(Request $request)
    {
        $respuesta = false;
        $resultado = '';
        $data = '';
        try {
            $data = Reporte::fncObtenerTotalTareasFinalizadas($request);
            $respuesta = true;
        } catch (QueryException $ex) {
            $resultado = $ex->errorInfo;
        }
        return response()->json(['data' => $data, 'respuesta' => $respuesta, 'mensaje' => $resultado]);
    }
}
