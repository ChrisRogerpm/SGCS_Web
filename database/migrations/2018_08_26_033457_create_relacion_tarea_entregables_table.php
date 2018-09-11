<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelacionTareaEntregablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sgcsRETApRelacionTareaEntregable', function (Blueprint $table) {
            $table->increments('RETAid_relaciontarea');
            $table->unsignedInteger('TAid_tarea1');
            $table->unsignedInteger('TAid_tarea2');
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
        Schema::dropIfExists('sgcsRETApRelacionTareaEntregable');
    }
}
