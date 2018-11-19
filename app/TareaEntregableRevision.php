<?php

namespace App;

use Carbon\Carbon;
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

}
