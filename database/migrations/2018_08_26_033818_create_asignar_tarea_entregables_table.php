<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignarTareaEntregablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sgcsATEpAsignarTareaEntregable', function (Blueprint $table) {
            $table->increments('ATEid_asignartareaproyecto');
            $table->unsignedInteger('TAid_tarea');
            $table->unsignedInteger('USUPROid_usuarioproyecto');
            $table->unsignedInteger('FAid_fase');
            $table->unsignedInteger('ENTRPROid_entregableproyecto');
            $table->date('ATEfecha_inicio_tareaproyecto');
            $table->date('ATEfecha_fin_tareaproyecto');
            $table->boolean('ATEestado_tareaproyecto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sgcsATEpAsignarTareaEntregable');
    }
}
