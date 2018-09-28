<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TareaEntregable extends Model
{
    protected $table = "sgcstaptareaentregable";

    protected $primaryKey = "TAid_tarea";

    protected $fillable = [
        'FAid_fase', 'ENTPROid_entregableproyecto', 'TAnombre_tarea', 'TAdescripcion_tarea', 'TAestado_tarea'
    ];

    public static function fncListarTareaEntregable()
    {
        $resultado = DB::table('sgcstaptareaentregable as taentre')
            ->select()
            ->get();
        return $resultado;
    }

    public static function fncRegistrarTareaEntregable(Request $request)
    {

    }
}
