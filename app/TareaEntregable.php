<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TareaEntregable extends Model
{
    protected $table = "sgcstaptareaentregable";

    protected $primaryKey = "TAid_tarea";

    protected $fillable = [
        'FAid_fase', 'ENTPROid_entregableproyecto', 'TAnombre_tarea', 'TAdescripcion_tarea', 'TAestado_tarea'
    ];

    public static function fncListarTareaEntregable(Request $request)
    {
        $proyecto_id = $request->input('PROid_proyecto');

        $resultado = DB::table('sgcstaptareaentregable as tapro')
            ->select('tapro.TAid_tarea', 'fa.FAnombre_fase', 'entre.ENTRnombre_entregable', 'tapro.TAnombre_tarea', 'tapro.*')
            ->join('sgcsfatfase as fa', 'tapro.FAid_fase', 'fa.FAid_fase')
            ->join('sgcsentrpropentregableproyecto as entpro', 'tapro.ENTPROid_entregableproyecto', 'entpro.ENTRPROid_entregableproyecto')
            ->join('sgcsentrtentregable as entre', 'entre.ENTRid_entregable', 'entpro.ENTRid_entregable')
            ->where('entpro.PROid_proyecto', $proyecto_id)
            ->get();
        return $resultado;
    }

    public static function fncRegistrarTareaEntregable(Request $request): bool
    {
        $resultado = false;
        try {
            $tarea_entregable = new TareaEntregable();
            $tarea_entregable->FAid_fase = $request->input('FAid_fase');
            $tarea_entregable->ENTPROid_entregableproyecto = $request->input('ENTPROid_entregableproyecto');
            $tarea_entregable->TAnombre_tarea = $request->input('TAnombre_tarea');
            $tarea_entregable->TAdescripcion_tarea = $request->input('TAdescripcion_tarea');
            $tarea_entregable->TAestado_tarea = 1;
            $tarea_entregable->save();
            $resultado = true;
        } catch (\Exception $ex) {
        }
        return $resultado;
    }

    public static function fncObtenerTareaEntregable(Request $request)
    {
        $tarea_entregable = DB::table('sgcstaptareaentregable as s')
            ->join('sgcsentrpropentregableproyecto as se', 's.ENTPROid_entregableproyecto', 'se.ENTRPROid_entregableproyecto')
            ->where('s.TAid_tarea', $request->input('TAid_tarea'))
            ->first();
        return $tarea_entregable;
    }

    public static function fncModificarTareaEntregable(Request $request): bool
    {
        $resultado = false;
        try {
            $tarea_entregable = TareaEntregable::findorfail($request->input('TAid_tarea'));
            $tarea_entregable->FAid_fase = $request->input('FAid_fase');
            $tarea_entregable->ENTPROid_entregableproyecto = $request->input('ENTPROid_entregableproyecto');
            $tarea_entregable->TAnombre_tarea = $request->input('TAnombre_tarea');
            $tarea_entregable->TAdescripcion_tarea = $request->input('TAdescripcion_tarea');
            $tarea_entregable->TAestado_tarea = $request->input('TAestado_tarea');
            $tarea_entregable->save();
            $resultado = true;
        } catch (\Exception $ex) {
        }
        return $resultado;
    }

    public static function fncListarTareaFiltroEntregble(Request $request)
    {
        $entregable_proyecto_id = $request->input('ENTPROid_entregableproyecto');
        $resultado = DB::table('sgcstaptareaentregable as tapro')
            ->where('tapro.ENTPROid_entregableproyecto', $entregable_proyecto_id)
            ->get();
        return $resultado;
    }

    public static function fncListarTareaEquipo()
    {
        $IdUsuarioLogeado = Auth()->user()->USUid_usuario;
        $lista = DB::table('sgcsatepasignartareaentregable as ata')
            ->select('ata.ATEid_asignartareaproyecto', 'ta.TAnombre_tarea', 'ata.ATEfecha_inicio_tareaproyecto', 'ata.ATEfecha_fin_tareaproyecto', 'ata.ATEestado_tareaproyecto')
            ->join('sgcstaptareaentregable as ta', 'ta.TAid_tarea', 'ata.TAid_tarea')
            ->join('sgcsentrpropentregableproyecto as entre', 'entre.ENTRPROid_entregableproyecto', 'ta.ENTPROid_entregableproyecto')
            ->join('sgcsprotproyecto as pro', 'pro.PROid_proyecto', 'entre.PROid_proyecto')
            ->join('sgcsusupropusuarioproyecto as usupro', 'usupro.USUPROid_usuarioproyecto', 'ata.USUPROid_usuarioproyecto')
            ->join('sgcsusutusuario as usu', 'usu.USUid_usuario', 'usupro.USUid_usuario')
            ->where('usu.USUid_usuario', $IdUsuarioLogeado)
            ->get();
        return $lista;
    }

    public static function fncActualizarEstadoTareaEntregable($TAid_tarea, $TAestado_tarea)
    {
        $respuesta = false;
        try {
            $tarea_entregable = TareaEntregable::find($TAid_tarea);
            $tarea_entregable->TAestado_tarea = $TAestado_tarea;
            $tarea_entregable->save();
            $respuesta = true;
        } catch (QueryException $ex) {
        }
        return $respuesta;
    }

    public static function fncObtenerTareasAvance(Request $request)
    {
        $FAid_fase = $request->input('FAid_fase');
        $PROid_proyecto = $request->input('PROid_proyecto');
        try {
            $resultado = DB::select(DB::raw("select ta.TAid_tarea,ta.TAnombre_tarea,ta.TAestado_tarea
                    from sgcstaptareaentregable ta
                    join sgcsentrpropentregableproyecto entre on entre.ENTRPROid_entregableproyecto = ta.ENTPROid_entregableproyecto
                    join sgcsprotproyecto pro on pro.PROid_proyecto = entre.PROid_proyecto
                    where ta.FAid_fase = '$FAid_fase' and pro.PROid_proyecto = '$PROid_proyecto'"));
        } catch (QueryException $ex) {
            $resultado = $ex->errorInfo;
        }
        return $resultado;
    }

    public static function fncTareaEntregableInfo($TAid_tarea)
    {
        $data = DB::select(DB::raw("SELECT t.TAnombre_tarea,pro.PROnombre_proyecto
        FROM sgcstaptareaentregable t
        JOIN sgcsentrpropentregableproyecto entrepro ON entrepro.ENTRPROid_entregableproyecto = t.ENTPROid_entregableproyecto
        JOIN sgcsprotproyecto pro ON pro.PROid_proyecto = entrepro.PROid_proyecto
        WHERE t.TAid_tarea =$TAid_tarea"))[0];
        return $data;
    }
}
