<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class MetodologiaProyecto extends Model
{
    protected $table = "sgcsmetpropmetodologiaproyecto";

    protected $primaryKey = "METPROid_metodologiaproyecto";

    protected $fillable = [
        'PROid_proyecto', 'METid_metodologia', 'METPROestado_metodologiaproyecto'
    ];

    public static function fncRegistrarMetodologiaProyecto(Request $request)
    {
        $metodologia_proyecto = new MetodologiaProyecto();
        $metodologia_proyecto->PROid_proyecto = $request->input('PROid_proyecto');
        $metodologia_proyecto->METid_metodologia = $request->input('METid_metodologia');
        $metodologia_proyecto->METPROestado_metodologiaproyecto = 1;
        $metodologia_proyecto->save();
        return $metodologia_proyecto;
    }

    public static function fncValidarMetodologiaProyecto(Request $request)
    {
        $proyecto_id = $request->input('PROid_proyecto');
        $resultado = MetodologiaProyecto::where('PROid_proyecto', $proyecto_id)->count();
        return $resultado;
    }
}
