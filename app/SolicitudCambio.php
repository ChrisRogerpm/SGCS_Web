<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class SolicitudCambio extends Model
{
    protected $table = 'sgcssolicampsolicitudcambio';
    protected $primaryKey = 'SOLICAMid_solicitudcambio';

    //protected $fillable = [''];

    public static function fncListarSolicitudCambio(Request $request): Collection
    {
        $proyecto_id = $request->input('PROid_proyecto');
        $resultado = DB::table('sgcssolicampsolicitudcambio as soli')
            ->join('sgcstaptareaentregable as ta', 'ta.TAid_tarea', 'soli.TAid_tarea')
            ->join('sgcsusutusuario as usu', 'usu.USUid_usuario', 'soli.USUid_usuario')
            ->where('soli.PROid_proyecto', $proyecto_id)
            ->where('soli.SOLICAMestado_solicitudcambio', 1)
            ->get();
        return $resultado;
    }

    public static function fncObtenerSolicitudCambio(Request $request)
    {
        $solicitud_cambio_id = $request->input('SOLICAMid_solicitudcambio');

        $resultado = DB::select(DB::raw("select soli.SOLICAMid_solicitudcambio,
                        soli.SOLICAMcodigo_solicitudcambio,
                        usu.USUnombre_usuario,
                        usu.USUapellido_usuario,
                        soli.SOLICAMobjetivo_solicitudcambio,
                        soli.SOLICAMdescripcion_solicitudcambio,
                        soli.SOLICAMfecha_solicitud_solicitudcambio,
                        ta.TAnombre_tarea 
                        from sgcssolicampsolicitudcambio soli 
                        join sgcstaptareaentregable ta on ta.TAid_tarea = soli.TAid_tarea 
                        join sgcsusutusuario usu on usu.USUid_usuario = soli.USUid_usuario 
                        where soli.SOLICAMid_solicitudcambio = '$solicitud_cambio_id'"))[0];
        return $resultado;
    }

    public static function fncEvaluarSolicitudCambio(Request $request)
    {
        $IdEstadoSolicitudCambio = $request->input('SOLICAMid_solicitudcambio');
        $EstadoSolicitudCambio = $request->input('SOLICAMestado_solicitudcambio');
        try {
            $resultado = DB::select(DB::raw("Update sgcssolicampsolicitudcambio as soli set soli.SOLICAMestado_solicitudcambio = '$EstadoSolicitudCambio' 
                        where soli.SOLICAMid_solicitudcambio = '$IdEstadoSolicitudCambio'"));
        } catch (QueryException $ex) {
            //$resultado = $ex->errorInfo;
        }
        return $resultado;
    }
}
