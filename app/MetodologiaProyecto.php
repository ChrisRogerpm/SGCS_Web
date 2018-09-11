<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetodologiaProyecto extends Model
{
    protected $table = "sgcsmetpropmetodologiaproyecto";

    protected $primaryKey = "METPROid_metodologiaproyecto";

    protected $fillable = [
      'PROid_proyecto','METid_metodologia','METPROestado_metodologiaproyecto'
    ];
}
