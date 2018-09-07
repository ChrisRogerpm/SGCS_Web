<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sgcsPROtProyecto', function (Blueprint $table) {
            $table->increments('PROid_proyecto');
            $table->string('PROnombre_proyecto');
            $table->unsignedInteger('USUid_usuario');
            $table->date('PROfecha_inicio_proyecto');
            $table->date('PROfecha_fin_proyecto');
            $table->boolean('PROestado_proyecto');
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
        Schema::dropIfExists('sgcsPROtProyecto');
    }
}
