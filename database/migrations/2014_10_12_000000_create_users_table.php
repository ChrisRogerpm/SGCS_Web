<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sgcsUSUtUsuario', function (Blueprint $table) {
            $table->increments('USUid_usuario');
            $table->string('USUnombre_usuario');
            $table->string('USUapellido_usuario');
            $table->string('USUdni_usuario');
            $table->string('USUcelular_usuario');
            $table->string('USUtipo_usuario');
            $table->string('USUfoto_usuario')->nullable(true);
            $table->string('USUemail_usuario')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('sgcsUSUtUsuario');
    }
}
