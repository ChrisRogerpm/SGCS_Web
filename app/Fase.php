<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Fase extends Model
{
    protected $table = "sgcsfatfase";
    protected $primaryKey = "FAid_fase";
    protected $fillable = [
        'METid_Fase', 'FAnombre_fase', 'FAdescripcion_fase', 'FAestado_fase'
    ];

    public static function fncListarFases()
    {
        //$resultado = Fase::all();
        $resultado = DB::table('sgcsfatfase as fa')
            ->select('fa.FAid_fase','met.METnombre_metodologia','fa.FAnombre_fase','fa.FAestado_fase')
            ->join('sgcsmettmetodologia as met','met.METid_metodologia','fa.METid_metodologia')
            ->get();
        return $resultado;
    }

    public static function fncRegistrarFase(Request $request)
    {
        $fase = new Fase();
        $fase->METid_metodologia = $request->input('METid_metodologia');
        $fase->FAnombre_fase = $request->input('FAnombre_fase');
        $fase->FAdescripcion_fase = $request->input('FAdescripcion_fase');
        $fase->FAestado_fase = $request->input('FAestado_fase');
        $fase->save();
        return $fase;
    }

    public static function fncEditarFase($FAid_fase)
    {
        $resultado = Fase::findorfail($FAid_fase);
        return $resultado;
    }

    public static function fncModificarFase(Request $request)
    {
        $fase = Fase::findorfail($request->input('FAid_fase'));
        $fase->METid_metodologia = $request->input('METid_metodologia');
        $fase->FAnombre_fase = $request->input('FAnombre_fase');
        $fase->FAdescripcion_fase = $request->input('FAdescripcion_fase');
        $fase->FAestado_fase = $request->input('FAestado_fase');
        $fase->save();
        return $fase;
    }

    public static function fncListrarFasesFiltro(Request $request)
    {
        $resultado = DB::table('sgcsfatfase as fa')
            ->select('fa.FAid_fase','met.METnombre_metodologia','fa.FAnombre_fase','fa.FAestado_fase')
            ->join('sgcsmettmetodologia as met','met.METid_metodologia','fa.METid_metodologia')
            ->where('fa.METid_metodologia',$request->input('METid_metodologia'))
            ->get();
        return $resultado;
    }
}
