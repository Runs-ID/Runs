<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosModulosPorPerfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_modulos_por_perfil', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('modulo_id')->unsigned();
            $table->integer('perfil_id')->unsigned();
            $table->timestamps();

            $table->foreign('modulo_id')->references('id')->on('usuarios_modulos');
            $table->foreign('perfil_id')->references('id')->on('usuario_perfil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios_modulos_por_perfil');
    }
}
