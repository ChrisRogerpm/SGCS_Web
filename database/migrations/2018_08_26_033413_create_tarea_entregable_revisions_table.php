<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTareaEntregableRevisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sgcsTAREpTareaEntregableRevision', function (Blueprint $table) {
            $table->increments('TAREid_tarearevision');
            $table->string('TAREobservacion_tarearevision');
            $table->string('TAREurl_tarearevision');
            $table->date('TAREfecha_emitida_tarearevision');
            $table->boolean('TAREestado_tarearevision');
            $table->unsignedInteger('ATPid_asignartareaproyecto');
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
        Schema::dropIfExists('sgcsTAREpTareaEntregableRevision');
    }
}
