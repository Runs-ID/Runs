<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('localidad_id')->unsigned();
            $table->string('nombre', 70);
            $table->string('cuit', 13);
            $table->string('direccion', 120);
            $table->string('observaciones', 255);
            $table->string('telefono', 15);
            $table->string('email', 70)->unique();
            $table->boolean('activo')->default(1);
            $table->timestamps();

            $table->foreign('localidad_id')->references('id')->on('localidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
