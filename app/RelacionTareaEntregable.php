<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RelacionTareaEntregable extends Model
{
    protected $table = "sgcsretaprelaciontareaentregable";
    protected $primaryKey = "RETAid_relaciontarea";
    protected $fillable = ['TAid_tarea1', 'TAid_tarea2'];

    public static function fncValidarTareaRelacionEntregable($TAid_tarea1, $TAid_tarea2){
        $resultado = DB::table('sgcsretaprelaciontareaentregable')
            ->where('TAid_tarea1', $TAid_tarea1)
            ->where('TAid_tarea2', $TAid_tarea2)
            ->count();
        return $resultado;
    }
    public static function fncValidarTareaEntregableSimilitud($TAid_tarea1, $TAid_tarea2): bool
    {
        $resultado = false;
        $registros = RelacionTareaEntregable::fncValidarTareaRelacionEntregable($TAid_tarea1,$TAid_tarea2);
        try {
            if ($TAid_tarea1 === $TAid_tarea2 || $registros > 0) {
                $resultado = false;
            } else {
                $resultado = true;
            }
        } catch (\Exception $ex) {
        }
        return $resultado;
    }

    public static function fncRegistrarRelacionTarea(Request $request)
    {
        $tarea_entregable_1 = $request->input('TAid_tarea1');
        $tarea_entregable_2 = $request->input('TAid_tarea2');
        for ($i = 0; $i < count($tarea_entregable_2); $i++) {
            if (self::fncValidarTareaEntregableSimilitud($tarea_entregable_1, $tarea_entregable_2[$i])) {
                $tarea_relacion = new RelacionTareaEntregable();
                $tarea_relacion->TAid_tarea1 = $tarea_entregable_1;
                $tarea_relacion->TAid_tarea2 = $tarea_entregable_2[$i];
                $tarea_relacion->save();
            }
        }
    }

    public static function fncListarTareaRelacion(Request $request)
    {
        $TareaId = $request->input('TAid_tarea1');
        $resultado = DB::select(DB::raw("SELECT tare.RETAid_relaciontarea,ta.TAnombre_tarea,entre.ENTRnombre_entregable
            FROM sgcsretaprelaciontareaentregable tare
            join sgcstaptareaentregable ta on ta.TAid_tarea = tare.TAid_tarea1
            join sgcsentrpropentregableproyecto entrepro on entrepro.ENTRPROid_entregableproyecto = ta.ENTPROid_entregableproyecto
            join sgcsentrtentregable entre on entre.ENTRid_entregable = entrepro.ENTRid_entregable
            WHERE tare.TAid_tarea1 = '$TareaId'"));
        return $resultado;
    }
}
