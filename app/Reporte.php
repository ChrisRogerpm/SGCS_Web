<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class Reporte extends Model
{
    public static function fncListarReporteDashboard()
    {
        $UsuarioLogeadoID = auth()->user()->USUid_usuario;
        try {
            $resultado = DB::select(DB::raw("SELECT
                        (SELECT COUNT(pro.PROid_proyecto)
                        FROM sgcsprotproyecto pro
                        WHERE pro.USUid_usuario = '$UsuarioLogeadoID') CantidadProyectos,
                        (
                        SELECT COUNT(ata.ATEid_asignartareaproyecto)
                        FROM
                        sgcsatepasignartareaentregable ata
                        JOIN sgcsusupropusuarioproyecto usupro ON usupro.USUPROid_usuarioproyecto = ata.USUPROid_usuarioproyecto
                        JOIN sgcsusutusuario usu ON usu.USUid_usuario = usupro.USUid_usuario
                        WHERE
                        usu.USUid_usuario = '$UsuarioLogeadoID' 
                        )TareasDesignadas,(
                        SELECT COUNT(soli.SOLICAMid_solicitudcambio)
                        FROM sgcssolicampsolicitudcambio soli
                        WHERE soli.USUid_usuario = '$UsuarioLogeadoID'
                        )SolicitudesRealizadas,(
                        SELECT COUNT(ata.ATEid_asignartareaproyecto)
                        FROM sgcsatepasignartareaentregable ata
                        JOIN sgcsusupropusuarioproyecto usupro ON usupro.USUPROid_usuarioproyecto = ata.USUPROid_usuarioproyecto
                        JOIN sgcsusutusuario usu ON usu.USUid_usuario = usupro.USUid_usuario
                        WHERE usu.USUid_usuario = '$UsuarioLogeadoID' AND ata.ATEestado_tareaproyecto = 2) TareasFinalizadas"));
        } catch (QueryException $ex) {
            $resultado = $ex;
        }
        return $resultado;
    }

    public static function fncObtenerTotalTareasFinalizadas(Request $request)
    {
        $PROid_proyecto = $request->input('PROid_proyecto');
        $FAid_fase = $request->input('FAid_fase');
        try {
            $resultado = DB::select(DB::raw("select count(ta.TAid_tarea) TotalTareas
                    from sgcstaptareaentregable ta
                    join sgcsentrpropentregableproyecto entrepro on entrepro.ENTRPROid_entregableproyecto = ta.ENTPROid_entregableproyecto
                    join sgcsprotproyecto pro on pro.PROid_proyecto = entrepro.PROid_proyecto
                    where pro.PROid_proyecto = '$PROid_proyecto' and entrepro.FAid_fase = '$FAid_fase' and ta.TAestado_tarea = 1"));
        } catch (QueryException $ex) {
            $resultado = $ex->errorInfo;
        }
        return $resultado;
    }
}
