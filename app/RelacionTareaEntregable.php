<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RelacionTareaEntregable extends Model
{
    protected $table = "sgcsretaprelaciontareaentregable";
    protected $primaryKey = "RETAid_relaciontarea";
    protected $fillable = ['TAid_tarea1', 'TAid_tarea2'];

    public static function fncValidarTareaEntregableSimilitud($TAid_tarea1,$TAid_tarea2): bool
    {
        $resultado = false;
        try{
            if ($TAid_tarea1 === $TAid_tarea2){
                $resultado = false;
            }else{
                $resultado = true;
            }
        }
        catch (\Exception $ex){
        }
        return $resultado;
    }

    public static function fncRegistrarRelacionTarea(Request $request){
        $tarea_entregable_1 = $request->input('TAid_tarea1');
        $tarea_entregable_2 = $request->input('TAid_tarea2');
        for($i = 0; $i< count($tarea_entregable_2) ; $i++)
        {
            if (self::fncValidarTareaEntregableSimilitud($tarea_entregable_1,$tarea_entregable_2[$i])){
                $tarea_relacion = new RelacionTareaEntregable();
                $tarea_relacion->TAid_tarea1 = $tarea_entregable_1;
                $tarea_relacion->TAid_tarea2 = $tarea_entregable_2[$i];
                $tarea_relacion->save();
            }
        }
    }
}
