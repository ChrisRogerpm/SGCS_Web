<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTareaEntregablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sgcsTApTareaEntregable', function (Blueprint $table) {
            $table->increments('TAid_tarea');
            $table->unsignedInteger('FAid_fase');
            $table->unsignedInteger('ENTPROid_entregableproyecto');
            $table->string('TAnombre_tarea');
            $table->string('TAdescripcion_tarea');
            $table->boolean('TAestado_tarea');
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
        Schema::dropIfExists('sgcsTApTareaEntregable');
    }
}
