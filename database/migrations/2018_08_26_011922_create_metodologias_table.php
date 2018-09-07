<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetodologiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sgcsMETtMetodologia', function (Blueprint $table) {
            $table->increments('METid_metodologia');
            $table->string('METnombre_metodologia');
            $table->mediumText('METnro_fases_metodologia');
            $table->boolean('METestado_metodologia');
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
        Schema::dropIfExists('sgcsMETtMetodologia');
    }
}
