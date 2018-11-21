<?php

namespace App\Http\Controllers\Equipo;

use App\TareaEntregableHistorial;
use App\TareaEntregableRevision;
use DB;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SolicitudRevisionController extends Controller
{
    public function fncSolicitudRevisionVista($PROid_proyecto)
    {
        return view('Equipo.SolicitudRevision.SolicitudRevisionVista', compact('PROid_proyecto'));
    }

    public function fncListarSolicitudRevisionJson(Request $request)
    {
        $lista = "";
        $respuesta = false;
        $mensaje_error = "";
        try {
            $lista = TareaEntregableRevision::fncListarTareaRevisionProyecto($request);
            $respuesta = true;
        } catch (QueryException $ex) {
            $mensaje_error = $ex->errorInfo;
        }
        return response()->json(['respuesta' => $respuesta, 'data' => $lista, 'mensaje' => $mensaje_error]);
    }

    public function fncRegistrarTareaEntregableHistorialJson(Request $request)
    {
        $resultado = 0;
        $mensaje_error = "";
        try {
//            $resultado = TareaEntregableHistorial::fncRegistrarTareaEntregableHistorial($request);
            $TAid_tarea = $request->input('TAid_tarea');
            try {
                $data = DB::select(DB::raw("select * from sgcstahiptareaentregablehistorial th
                        join sgcstareptareaentregablerevision rev on rev.TAREid_tarearevision = th.TAREid_revision
                        join sgcsatepasignartareaentregable ata on ata.ATEid_asignartareaproyecto = rev.ATPid_asignartareaproyecto
                        where ata.TAid_tarea = 5
                        order by th.TAHInumeroversion desc limit 1"))[0];
                if($data != null){
                    $resultado = $data->TAHInumeroversion;
                }else{
                    $resultado = false;
                }

            } catch (QueryException $ex) {
            }
        } catch (QueryException $ex) {
            $mensaje_error = $ex->errorInfo;
        }
        return response()->json(['respuesta' => $resultado, 'mensaje' => $mensaje_error]);
    }

}
