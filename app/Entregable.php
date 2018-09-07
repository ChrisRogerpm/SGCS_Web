<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Entregable extends Model
{
    protected $table = "sgcsentrtentregable";
    protected $primaryKey = "ENTRid_entregable";
    protected $fillable = [
        'METid_metodologia', 'FAid_fase', 'ENTRnombre_entregable', 'ENTRdescripcion_entregable', 'ENTRestado_entregable'
    ];

    public static function fncListarEntregables()
    {
        $resultado = DB::table('sgcsentrtentregable as ent')
            ->select('ent.ENTRid_entregable', 'met.METnombre_metodologia', 'fa.FAnombre_fase', 'ent.ENTRnombre_entregable', 'ent.ENTRestado_entregable')
            ->join('sgcsmettmetodologia as met', 'met.METid_metodologia', 'ent.METid_metodologia')
            ->join('sgcsfatfase as fa', 'fa.FAid_fase', 'ent.FAid_fase')
            ->get();
        return $resultado;
    }

    public static function fncListarEntregableFaseFiltro(Request $request)
    {
        $resultado = DB::table('sgcsentrtentregable as ent')
            ->select('ent.ENTRid_entregable', 'met.METnombre_metodologia', 'fa.FAnombre_fase', 'ent.ENTRnombre_entregable', 'ent.ENTRestado_entregable')
            ->join('sgcsmettmetodologia as met', 'met.METid_metodologia', 'ent.METid_metodologia')
            ->join('sgcsfatfase as fa', 'fa.FAid_fase', 'ent.FAid_fase')
            ->where('ent.FAid_fase',$request->input('FAid_fase'))
            ->get();
        return $resultado;
    }

    public static function fncRegistrarEntregable(Request $request)
    {
        $entregable = new Entregable();
        $entregable->METid_metodologia = $request->input('METid_metodologia');
        $entregable->FAid_fase = $request->input('FAid_fase');
        $entregable->ENTRnombre_entregable = $request->input('ENTRnombre_entregable');
        $entregable->ENTRdescripcion_entregable = $request->input('ENTRdescripcion_entregable');
        $entregable->ENTRestado_entregable = $request->input('ENTRestado_entregable');
        $entregable->save();
        return $entregable;
    }

    public static function fncEditarEntregable($ENTRid_entregable)
    {
        $resultado = Entregable::findorfail($ENTRid_entregable);
        return $resultado;
    }

    public static function fncModificarEntregable(Request $request)
    {
        $entregable = Entregable::findorfail($request->input('ENTRid_entregable'));
        $entregable->METid_metodologia = $request->input('METid_metodologia');
        $entregable->FAid_fase = $request->input('FAid_fase');
        $entregable->ENTRnombre_entregable = $request->input('ENTRnombre_entregable');
        $entregable->ENTRdescripcion_entregable = $request->input('ENTRdescripcion_entregable');
        $entregable->ENTRestado_entregable = $request->input('ENTRestado_entregable');
        $entregable->save();
        return $entregable;
    }
}
