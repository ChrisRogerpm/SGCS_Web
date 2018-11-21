<?php

namespace App;


use Carbon\Carbon;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class AsignarTareaEntregable extends Model
{

    protected $table = 'sgcsatepasignartareaentregable';
    protected $primaryKey = 'ATEid_asignartareaproyecto';
    protected $fillable = ['TAid_tarea', 'USUPROid_usuarioproyecto', 'ATEfecha_inicio_tareaproyecto', 'ATEfecha_fin_tareaproyecto', 'ATEestado_tareaproyecto'];

    public static function fncRegistrarAsignarTareaEntregable(Request $request): bool
    {
        $respuesta = false;
        try {
            $TAid_tarea = $request->input('TAid_tarea');
            $USUPROid_usuarioproyecto = $request->input('USUPROid_usuarioproyecto');
            if (AsignarTareaEntregable::fncValidarExistenciaAsignacionTarea($TAid_tarea, $USUPROid_usuarioproyecto)) {
                $asignar_tarea = new AsignarTareaEntregable();
                $asignar_tarea->TAid_tarea = $TAid_tarea;
                $asignar_tarea->USUPROid_usuarioproyecto = $USUPROid_usuarioproyecto;
                $asignar_tarea->ATEfecha_inicio_tareaproyecto = Carbon::parse($request->input('ATEfecha_inicio_tareaproyecto'));
                $asignar_tarea->ATEfecha_fin_tareaproyecto = Carbon::parse($request->input('ATEfecha_fin_tareaproyecto'));
                $asignar_tarea->ATEestado_tareaproyecto = 1;
                $asignar_tarea->save();
                $respuesta = true;
            }
        } catch (QueryException $ex) {

        }
        return $respuesta;
    }

    public static function fncValidarExistenciaAsignacionTarea($TAid_tarea, $USUPROid_usuarioproyecto): bool
    {
        $respuesta = false;
        try {
            $contenido = DB::Table('sgcsatepasignartareaentregable')
                ->where('TAid_tarea', $TAid_tarea)
                ->where('USUPROid_usuarioproyecto', $USUPROid_usuarioproyecto)
                ->count();
            if ($contenido < 1) {
                $respuesta = true;
            }
        } catch (QueryException $ex) {

        }
        return $respuesta;
    }

    public static function fncProyectoTareaAsignadaUsuario()
    {
        $USUid_usuario = auth()->user()->USUid_usuario;
        $resultado = "";
        try {
            $resultado = DB::select(DB::raw("
            select pro.PROid_proyecto, pro.PROnombre_proyecto
            from sgcsatepasignartareaentregable ata
            join sgcsusupropusuarioproyecto usupro on usupro.USUPROid_usuarioproyecto = ata.USUPROid_usuarioproyecto
            join sgcsusutusuario usu on usu.USUid_usuario = usupro.USUid_usuario
            join sgcstaptareaentregable ta on ta.TAid_tarea = ata.TAid_tarea
            join sgcsentrpropentregableproyecto entrepro on entrepro.ENTRPROid_entregableproyecto = ta.ENTPROid_entregableproyecto
            join sgcsprotproyecto pro on pro.PROid_proyecto = entrepro.PROid_proyecto
            where usu.USUid_usuario = '$USUid_usuario'
            group by pro.PROid_proyecto, pro.PROnombre_proyecto"));
        } catch (QueryException $ex) {

        }
        return $resultado;
    }

    public static function fncTareasAsignadaUsuario(Request $request)
    {
        $USUid_usuario = auth()->user()->USUid_usuario;
        $PROid_proyecto = $request->input('PROid_proyecto');
        $resultado = "";
        try {
            $resultado = DB::select(DB::raw("
            select ta.TAid_tarea, ta.TAnombre_tarea
            from sgcsatepasignartareaentregable ata
            join sgcsusupropusuarioproyecto usupro on usupro.USUPROid_usuarioproyecto = ata.USUPROid_usuarioproyecto
            join sgcsusutusuario usu on usu.USUid_usuario = usupro.USUid_usuario
            join sgcstaptareaentregable ta on ta.TAid_tarea = ata.TAid_tarea
            join sgcsentrpropentregableproyecto entrepro on entrepro.ENTRPROid_entregableproyecto = ta.ENTPROid_entregableproyecto
            join sgcsprotproyecto pro on pro.PROid_proyecto = entrepro.PROid_proyecto
            where usu.USUid_usuario = '$USUid_usuario' and pro.PROid_proyecto = '$PROid_proyecto'"));
        } catch (QueryException $ex) {

        }
        return $resultado;
    }

    public static function fncActualizarEstadoTareaAsignada(Request $request)
    {
        $ATEid_asignartareaproyecto = $request->input('ATPid_asignartareaproyecto');
        $respuesta = false;
        try {
            $tarea_asignada = AsignarTareaEntregable::findorfail($ATEid_asignartareaproyecto);
            $tarea_asignada->ATEestado_tareaproyecto = 2;
            $tarea_asignada->save();
            $respuesta = true;
        } catch (QueryException $ex) {
        }
        return $respuesta;
    }

    public static function fncActualizarEstadoTareaAsignadaAprobado($ATEid_asignartareaproyecto)
    {
        $respuesta = false;
        try {
            $tarea_asignada = AsignarTareaEntregable::findorfail($ATEid_asignartareaproyecto);
            $tarea_asignada->ATEestado_tareaproyecto = 3;
            $tarea_asignada->save();
            $respuesta = true;
        } catch (QueryException $ex) {
        }
        return $respuesta;
    }
    public static function fncActualizarEstadoTareaAsignadaProgreso($ATEid_asignartareaproyecto)
    {
        $respuesta = false;
        try {
            $tarea_asignada = AsignarTareaEntregable::findorfail($ATEid_asignartareaproyecto);
            $tarea_asignada->ATEestado_tareaproyecto = 1;
            $tarea_asignada->save();
            $respuesta = true;
        } catch (QueryException $ex) {
        }
        return $respuesta;
    }
}
