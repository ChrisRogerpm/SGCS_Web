<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class EntregableProyecto extends Model
{
    protected $table = 'sgcsentrpropentregableproyecto';
    protected $primaryKey = 'ENTRPROid_entregableproyecto';
    protected $fillable = ['PROid_proyecto', 'ENTRid_entregable', 'ENTRPROestado_entregable_proyecto'];


    public static function fncListarEntregableProyecto(Request $request)
    {
        $proyecto_id = $request->input('PROid_proyecto');
        $resultado = DB::table('sgcsentrpropentregableproyecto as entrepro')
            ->select('entrepro.ENTRPROid_entregableproyecto','fa.FAnombre_fase','entre.ENTRnombre_entregable')
            ->join('sgcsentrtentregable as entre','entre.ENTRid_entregable','entrepro.ENTRid_entregable')
            ->join('sgcsfatfase as fa','fa.FAid_fase','entre.FAid_fase')
            ->where('entrepro.PROid_proyecto',$proyecto_id)
            ->get();
        return $resultado;
    }
}
