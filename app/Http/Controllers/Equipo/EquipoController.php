<?php

namespace App\Http\Controllers\Equipo;

use App\Reporte;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
    public function fncObtenerTotalTareasFinalizadasJson(Request $request){

    }
}
