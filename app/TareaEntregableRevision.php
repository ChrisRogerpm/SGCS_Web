<?php

namespace App;

use Carbon\Carbon;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TareaEntregableRevision extends Model
{
    protected $table = 'sgcstareptareaentregablerevision';

    protected $primaryKey = 'TAREid_tarearevision';

    protected $fillable = [
        'ATPid_asignartareaproyecto',
        'TAREurl_tarearevision',
        'TAREobservacion_tarearevision',
        'TAREfecha_emitida_tarearevision',
        'TAREestado_tarearevision'
    ];

    public static function fncRegistrarRevisionTareEntregable(Request $request)
    {
        $TAREfecha_emitida_tarearevision = Carbon::now();
        $TAREestado_tarearevision = 1;
        $respuesta = false;
        try{
            $revision = new TareaEntregableRevision();
            $revision->ATPid_asignartareaproyecto = $request->input('ATPid_asignartareaproyecto');
            $revision->TAREurl_tarearevision = $request->input('TAREurl_tarearevision');
            $revision->TAREobservacion_tarearevision = $request->input('TAREobservacion_tarearevision');
            $revision->TAREfecha_emitida_tarearevision = $TAREfecha_emitida_tarearevision;
            $revision->TAREestado_tarearevision = $TAREestado_tarearevision;
            $revision->save();
            $respuesta = true;
        }catch (QueryException $ex){
        }
        return $respuesta;
    }

    public static function fncListarTareaRevisionProyecto(Request $request)
    {
        $PROid_proyecto = $request->input('PROid_proyecto');
        $resultado = "";
        try {
            $resultado = DB::select(DB::raw("
            select re.TAREid_tarearevision,ta.TAnombre_tarea,re.TAREurl_tarearevision,re.TAREfecha_emitida_tarearevision,re.TAREestado_tarearevision,
            re.TAREobservacion_tarearevision from sgcstareptareaentregablerevision re
            join sgcsatepasignartareaentregable ata on ata.ATEid_asignartareaproyecto = re.ATPid_asignartareaproyecto
            join sgcstaptareaentregable ta on ta.TAid_tarea = ata.TAid_tarea
            join sgcsentrpropentregableproyecto entre on entre.ENTRPROid_entregableproyecto = ta.ENTPROid_entregableproyecto
            join sgcsprotproyecto pro on pro.PROid_proyecto = entre.PROid_proyecto
            where pro.PROid_proyecto = '$PROid_proyecto'"));
        } catch (QueryException $ex) {
        }
        return $resultado;
    }

}
