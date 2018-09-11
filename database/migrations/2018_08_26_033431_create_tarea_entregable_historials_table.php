<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTareaEntregableHistorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sgcsTAHIpTareaEntregableHistorial', function (Blueprint $table) {
            $table->increments('TAHIid_tareaversion');
            $table->double('TAHInumeroversion');
            $table->string('TAHIenlace_tareaversion');
            $table->date('TAHIfecha_emitida_tareaversion');
            $table->boolean('TAHIestado_tareaversion');
            $table->unsignedInteger('TAREid_revision');
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
        Schema::dropIfExists('sgcsTAHIpTareaEntregableHistorial');
    }
}
