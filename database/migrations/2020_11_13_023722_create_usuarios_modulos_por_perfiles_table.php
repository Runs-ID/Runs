<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosModulosPorPerfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_modulos_por_perfiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('modulos_id')->unsigned();
            $table->integer('perfiles_id')->unsigned();
            $table->boolean('activo')->default(1);
            $table->timestamps();

            $table->foreign('modulos_id')->references('id')->on('usuarios_modulos')->onDelete('cascade');
            $table->foreign('perfiles_id')->references('id')->on('usuarios_perfiles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios_modulos_por_perfiles');
    }
}
