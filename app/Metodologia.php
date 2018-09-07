<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Metodologia extends Model
{
    protected $table = "sgcsmettmetodologia";

    protected $primaryKey ="METid_metodologia";

    protected $fillable = [
        'METnombre_metodologia','METnro_fases_metodologia','METestado_metodologia'
    ];

    public static function fncListarMetodologias()
    {
        $resultado = Metodologia::all();
        return $resultado;
    }

    public static function fncRegistrarMetodologia(Request $request)
    {
        $metodologia = new Metodologia();
        $metodologia->METnombre_metodologia = $request->input('METnombre_metodologia');
        $metodologia->METnro_fases_metodologia = $request->input('METnro_fases_metodologia');
        $metodologia->METestado_metodologia = $request->input('METestado_metodologia');
        $metodologia->save();
        return $metodologia;
    }

    public static function fncEditarMetodologia($METid_metodologia)
    {
        $resultado = Metodologia::findorfail($METid_metodologia);
        return $resultado;
    }

    public static function fncModificarMetodologia(Request $request)
    {
        $metodologia = Metodologia::findorfail($request->input('METid_metodologia'));
        $metodologia->METnombre_metodologia = $request->input('METnombre_metodologia');
        $metodologia->METnro_fases_metodologia = $request->input('METnro_fases_metodologia');
        $metodologia->METestado_metodologia = $request->input('METestado_metodologia');
        $metodologia->save();
        return $metodologia;
    }

}
