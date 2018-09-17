<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TareaEntregable extends Model
{
    protected $table = "sgcstaptareaentregable";

    protected $primaryKey = "TAid_tarea";

    protected $fillable = [
        'FAid_fase', 'ENTPROid_entregableproyecto', 'TAnombre_tarea', 'TAdescripcion_tarea', 'TAestado_tarea'
    ];

//    public static function fncTareaEntregableTotal(Request $request)
//    {
//        $proyecto
//    }
}
