<?php

namespace App;

use Carbon\Carbon;
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
        $respuesta = false;
        $TAHIfecha_emitida_tareaversion = Carbon::now();
        try {
            $historial = new TareaEntregableHistorial();
            $historial->TAREid_revision = $request->input('TAREid_revision');
            $historial->TAHInumeroversion = $request->input('TAHInumeroversion');
            $historial->TAHIenlace_tareaversion = $request->input('TAHIenlace_tareaversion');
            $historial->TAHIfecha_emitida_tareaversion = $TAHIfecha_emitida_tareaversion;
            $historial->TAHIestado_tareaversion = $request->input('TAHIestado_tareaversion');
            $historial->save();
            $respuesta = true;
        } catch (QueryException $ex) {
        }
        return $respuesta;
    }

    public function ObtenerUltimaVersionTareaRevision($TAREid_revision)
    {
        $resultado = 0;
        try {
            $data = TareaEntregableHistorial::where('TAREid_revision', $TAREid_revision)->first();
            $resultado = $data->TAHInumeroversion;
        } catch (QueryException $ex) {
        }
        return $resultado;
    }
}
