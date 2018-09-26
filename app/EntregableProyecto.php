<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class EntregableProyecto extends Model
{
    protected $table = 'sgcsentrpropentregableproyecto';
    protected $primaryKey = 'ENTRPROid_entregableproyecto';
    protected $fillable = ['PROid_proyecto', 'ENTRid_entregable','FAid_fase' ,'ENTRPROestado_entregable_proyecto'];


    public static function fncListarEntregableProyecto(Request $request)
    {
        $proyecto_id = $request->input('PROid_proyecto');
        $resultado = DB::table('sgcsentrpropentregableproyecto as entrepro')
            ->select('entrepro.ENTRPROid_entregableproyecto', 'fa.FAnombre_fase', 'entre.ENTRnombre_entregable','entrepro.ENTRPROestado_entregable_proyecto')
            ->join('sgcsentrtentregable as entre', 'entre.ENTRid_entregable', 'entrepro.ENTRid_entregable')
            ->join('sgcsfatfase as fa', 'fa.FAid_fase', 'entre.FAid_fase')
            ->where('entrepro.PROid_proyecto', $proyecto_id)
            ->get();
        return $resultado;
    }

    public static function fncCambiarEstadoEntregableProyecto(Request $request){
        $resultado = false;
        $entregable_proyecto_id = $request->input('ENTRPROid_entregableproyecto');
        $estado = $request->input('ENTRPROestado_entregable_proyecto');
        try{
            EntregableProyecto::findorfail($entregable_proyecto_id)->update(['ENTRPROestado_entregable_proyecto' => $estado]);
            $resultado = true;
        }catch (\Exception $ex){
        }
        return $resultado;
    }

    public static function fncRegistrarEntregableProyecto(Request $request)
    {
        $resultado = false;
        $entregable_id = $request->input('ENTRid_entregable');
        $proyecto_id = $request->input('PROid_proyecto');
        $fase_id = $request->input('FAid_fase');

        try{
            for ($i = 0; $i < count($entregable_id); $i++) {
                if (self::fncValidarEntregableProyecto($entregable_id[$i], $proyecto_id) == 0) {
                    $entregable_proyecto = new EntregableProyecto();
                    $entregable_proyecto->PROid_proyecto = $proyecto_id;
                    $entregable_proyecto->FAid_fase = $fase_id;
                    $entregable_proyecto->ENTRid_entregable = $entregable_id[$i];
                    $entregable_proyecto->ENTRPROestado_entregable_proyecto = 1;
                    $entregable_proyecto->save();
                }
            }
            $resultado = true;
        }catch (\Exception $ex){
            //throw;
        }
        return $resultado;
    }

    public static function fncValidarEntregableProyecto($entregable_id, $proyecto_id)
    {
        return EntregableProyecto::where('ENTRid_entregable', $entregable_id)->where('PROid_proyecto', $proyecto_id)->count();
    }
}
