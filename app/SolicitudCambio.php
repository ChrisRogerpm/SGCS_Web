<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SolicitudCambio extends Model
{
    protected $table = 'sgcssolicampsolicitudcambio';
    protected $primaryKey = "SOLICAMid_solicitudcambio";
    protected $fillable = [''];

    public static function fncListarComiteCambio(Request $request)
    {
        $proyecto_id = $request->input('PROid_proyecto');
        $resultado = DB::table('sgcssolicampsolicitudcambio as soli')
            ->join('sgcstaptareaentregable as ta', 'ta.TAid_tarea', 'soli.TAid_tarea')
            ->join('sgcsusutusuario as usu', 'usu.USUid_usuario', 'soli.USUid_usuario')
            ->where('soli.PROid_proyecto', $proyecto_id)
            ->where('soli.SOLICAMestado_solicitudcambio', 1)
            ->get();
        return $resultado;
    }
}
