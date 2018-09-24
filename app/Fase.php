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
            ->select('fa.FAid_fase', 'met.METnombre_metodologia', 'fa.FAnombre_fase', 'fa.FAestado_fase')
            ->join('sgcsmettmetodologia as met', 'met.METid_metodologia', 'fa.METid_metodologia')
            ->get();
        return $resultado;
    }

    public static function fncRegistrarFase(Request $request)
    {
        $nro_fases_limite = Fase::fncNumeroFasesLimiteMetodologia($request->input('METid_metodologia'));
        $nro_fases_registradas = Fase::fncNumeroFasesRegistradas($request->input('METid_metodologia'));

        if ($nro_fases_registradas < $nro_fases_limite) {
            $fase = new Fase();
            $fase->METid_metodologia = $request->input('METid_metodologia');
            $fase->FAnombre_fase = $request->input('FAnombre_fase');
            $fase->FAdescripcion_fase = $request->input('FAdescripcion_fase');
            $fase->FAestado_fase = $request->input('FAestado_fase');
            $fase->save();
            return $fase;
        }
        return null;
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
            ->select('fa.FAid_fase', 'met.METnombre_metodologia', 'fa.FAnombre_fase', 'fa.FAestado_fase')
            ->join('sgcsmettmetodologia as met', 'met.METid_metodologia', 'fa.METid_metodologia')
            ->where('fa.METid_metodologia', $request->input('METid_metodologia'))
            ->get();
        return $resultado;
    }

    public static function fncListrarFasesProyecto(Request $request)
    {
        $proyecto_id = $request->input('PROid_proyecto');
        $metodologia_id = MetodologiaProyecto::where('PROid_proyecto', $proyecto_id)->first();

        $resultado = DB::table('sgcsfatfase as fa')
            ->select('fa.FAid_fase', 'met.METnombre_metodologia', 'fa.FAnombre_fase', 'fa.FAestado_fase')
            ->join('sgcsmettmetodologia as met', 'met.METid_metodologia', 'fa.METid_metodologia')
            ->where('fa.METid_metodologia', $metodologia_id->METid_metodologia)
            ->get();
        return $resultado;
    }

    public static function fncNumeroFasesLimiteMetodologia($METid_metodologia)
    {
        return Metodologia::findorfail($METid_metodologia)->METnro_fases_metodologia;
    }

    public static function fncNumeroFasesRegistradas($METid_metodologia)
    {
        return Fase::where('METid_metodologia', $METid_metodologia)->count();
    }
}
