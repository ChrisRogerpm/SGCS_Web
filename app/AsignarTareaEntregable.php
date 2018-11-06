<?php

namespace App;


use Carbon\Carbon;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AsignarTareaEntregable extends Model
{

    protected $table = 'sgcsatepasignartareaentregable';
    protected $primaryKey = 'ATEid_asignartareaproyecto';
    protected $fillable = ['TAid_tarea', 'USUPROid_usuarioproyecto', 'ATEfecha_inicio_tareaproyecto', 'ATEfecha_fin_tareaproyecto', 'ATEestado_tareaproyecto'];

    //
    public static $Usuario;
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
        } catch (\Exception $ex) {
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
        } catch (\Exception $ex) {
        }
        return $respuesta;
    }
}
