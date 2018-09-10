<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetodologiaProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sgcsMETPROpMetodologiaProyecto', function (Blueprint $table) {
            $table->increments('METPROid_metodologiaproyecto');
            $table->unsignedInteger('PROid_proyecto');
            $table->unsignedInteger('METid_metodologia');
            $table->unsignedInteger('METPROestado_metodologiaproyecto');
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
        Schema::dropIfExists('sgcsMETPROpMetodologiaProyecto');
    }
}
