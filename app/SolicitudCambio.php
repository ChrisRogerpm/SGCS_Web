<?php

namespace App;

use Carbon\Carbon;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class SolicitudCambio extends Model
{
    protected $table = 'sgcssolicampsolicitudcambio';
    protected $primaryKey = 'SOLICAMid_solicitudcambio';

    protected $fillable =
        [
            'SOLICAMobjetivo_solicitudcambio',
            'SOLICAMdescripcion_solicitudcambio',
            'SOLICAMfecha_solicitud_solicitudcambio',
            'PROid_proyecto',
            'FAid_fase',
            'ENTPROid_entregableproyecto',
            'SOLICAMcodigo_solicitudcambio',
            'USUid_usuario',
            'TAid_tarea',
            'SOLICAMestado_solicitudcambio'
        ];

    public static function fncRegistrarSolicitudCambio(Request $request): bool
    {
        $UsuarioLogeado = Auth()->user()->USUid_usuario;
        $FechaSolicitudRegistrada = Carbon::now();
        $respuesta = "";

        try {
            $solicitud = new SolicitudCambio();
            $solicitud->SOLICAMobjetivo_solicitudcambio = $request->input('SOLICAMobjetivo_solicitudcambio');
            $solicitud->SOLICAMdescripcion_solicitudcambio = $request->input('SOLICAMdescripcion_solicitudcambio');
            $solicitud->SOLICAMfecha_solicitud_solicitudcambio = $FechaSolicitudRegistrada;
            $solicitud->PROid_proyecto = $request->input('PROid_proyecto');
            $solicitud->TAid_tarea = $request->input('TAid_tarea');
            $solicitud->SOLICAMcodigo_solicitudcambio = $request->input('SOLICAMcodigo_solicitudcambio');
            $solicitud->SOLICAMestado_solicitudcambio = 1;
            $solicitud->USUid_usuario = $UsuarioLogeado;
            $solicitud->save();
            $respuesta = true;
        } catch (QueryException $ex) {
        }
        return $respuesta;
    }

    public static function fncListarSolicitudCambio(Request $request)
    {
        $proyecto_id = $request->input('PROid_proyecto');
        $resultado = DB::table('sgcssolicampsolicitudcambio as soli')
            ->join('sgcstaptareaentregable as ta', 'ta.TAid_tarea', 'soli.TAid_tarea')
            ->join('sgcsusutusuario as usu', 'usu.USUid_usuario', 'soli.USUid_usuario')
            ->where('soli.PROid_proyecto', $proyecto_id)
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
        $resultado = false;
        try {
            DB::select(DB::raw("Update sgcssolicampsolicitudcambio as soli set soli.SOLICAMestado_solicitudcambio = '$EstadoSolicitudCambio' 
                        where soli.SOLICAMid_solicitudcambio = '$IdEstadoSolicitudCambio'"));
            $resultado = true;
        } catch (QueryException $ex) {
        }
        return $resultado;
    }

    public static function fncListarSolicitudCambioUsuario()
    {
        $USUid_usuario = auth()->user()->USUid_usuario;
        $resultado = DB::select(DB::raw("
                    select soli.SOLICAMid_solicitudcambio,pro.PROnombre_proyecto,ta.TAnombre_tarea,soli.SOLICAMestado_solicitudcambio,soli.USUid_usuario
                    from sgcssolicampsolicitudcambio soli
                    join sgcsprotproyecto pro on pro.PROid_proyecto = soli.PROid_proyecto
                    join sgcstaptareaentregable ta on ta.TAid_tarea = soli.TAid_tarea
                    where soli.USUid_usuario = '$USUid_usuario'"));
        return $resultado;
    }
}
