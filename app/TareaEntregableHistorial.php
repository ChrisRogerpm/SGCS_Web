<?php

namespace App;

use Carbon\Carbon;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TareaEntregableHistorial extends Model
{
    protected $table = 'sgcstahiptareaentregablehistorial';
    protected $primaryKey = 'TAHIid_tareaversion';
    protected $fillable = ['TAREid_revision', 'TAHInumeroversion', 'TAHIenlace_tareaversion', 'TAHIfecha_emitida_tareaversion', 'TAHIestado_tareaversion'];

    public static function fncRegistrarTareaEntregableHistorial(Request $request)
    {
        $FechaActual = Carbon::now();
        $VersionAgregada = 0.1;
        $VersionNueva = 1;
        $TAREid_revision = $request->input('TAREid_revision');
        $EstadoTareaversion = $request->input('TAHIestado_tareaversion');
        $TAid_tarea = TareaEntregableRevision::fncObtenerDetalleTareaRevision($TAREid_revision);
        try {
            $data = TareaEntregableHistorial::fncObtenerVersionTareaEntregableHistorial($TAid_tarea->TAid_tarea);
            if ($data != null) {
                $EstadoRevision = 2;
                $VersionActualizada = $data[0]->TAHInumeroversion + $VersionAgregada;
                $TareaEntregableHistorial = new TareaEntregableHistorial();
                $TareaEntregableHistorial->TAREid_revision = $TAREid_revision;
                $TareaEntregableHistorial->TAHInumeroversion = $VersionActualizada;
                $TareaEntregableHistorial->TAHIenlace_tareaversion = $request->input('TAHIenlace_tareaversion');
                $TareaEntregableHistorial->TAHIfecha_emitida_tareaversion = $FechaActual;
                $TareaEntregableHistorial->TAHIestado_tareaversion = $request->input('TAHIestado_tareaversion');
                $TareaEntregableHistorial->save();
                if ($request->input('TAHIestado_tareaversion') == 1) {
                    AsignarTareaEntregable::fncActualizarEstadoTareaAsignadaAprobado($TAid_tarea->ATEid_asignartareaproyecto);
                    TareaEntregableRevision::fncActualizarEstadoTareaEntregableRevision($TAREid_revision, 2);
                } else {
                    AsignarTareaEntregable::fncActualizarEstadoTareaAsignadaProgreso($TAid_tarea->ATEid_asignartareaproyecto);
                    TareaEntregableRevision::fncActualizarEstadoTareaEntregableRevision($TAREid_revision, 3);
                }

                $resultado = true;
            } else {
                $TareaEntregableHistorial = new TareaEntregableHistorial();
                $TareaEntregableHistorial->TAREid_revision = $TAREid_revision;
                $TareaEntregableHistorial->TAHInumeroversion = $VersionNueva;
                $TareaEntregableHistorial->TAHIenlace_tareaversion = $request->input('TAHIenlace_tareaversion');
                $TareaEntregableHistorial->TAHIfecha_emitida_tareaversion = $FechaActual;
                $TareaEntregableHistorial->TAHIestado_tareaversion = $request->input('TAHIestado_tareaversion');
                $TareaEntregableHistorial->save();
                if ($request->input('TAHIestado_tareaversion') == 1) {
                    AsignarTareaEntregable::fncActualizarEstadoTareaAsignadaAprobado($TAid_tarea->ATEid_asignartareaproyecto);
                    TareaEntregableRevision::fncActualizarEstadoTareaEntregableRevision($TAREid_revision, 2);
                } else {
                    AsignarTareaEntregable::fncActualizarEstadoTareaAsignadaProgreso($TAid_tarea->ATEid_asignartareaproyecto);
                    TareaEntregableRevision::fncActualizarEstadoTareaEntregableRevision($TAREid_revision, 3);
                }
//                TareaEntregableRevision::fncActualizarEstadoTareaEntregableRevision($TAREid_revision,);
                $resultado = true;

            }
        } catch (QueryException $ex) {
            $resultado = $ex->errorInfo;
        }
        return $resultado;
    }

    public function ObtenerUltimaVersionTareaRevision($TAREid_revision)
    {
        $resultado = 0;
        try {
            $data = TareaEntregableHistorial::where('TAREid_revision', $TAREid_revision)->first();
            if ($data != null) {
                $resultado = $data->TAHInumeroversion;
            }
        } catch (QueryException $ex) {
        }
        return $resultado;
    }

    public static function fncObtenerVersionTareaEntregableHistorial($TAid_tarea)
    {
        $resultado = DB::select(DB::raw("select * from sgcstahiptareaentregablehistorial th
                        join sgcstareptareaentregablerevision rev on rev.TAREid_tarearevision = th.TAREid_revision
                        join sgcsatepasignartareaentregable ata on ata.ATEid_asignartareaproyecto = rev.ATPid_asignartareaproyecto
                        where ata.TAid_tarea = '$TAid_tarea'
                        order by th.TAHInumeroversion desc limit 1"));
        return $resultado;
    }
}
