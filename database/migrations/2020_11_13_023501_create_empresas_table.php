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
            $table->string('nombre', 70)->nullable();
            $table->string('cuit', 13)->nullable();
            $table->string('direccion', 120)->nullable();
            $table->string('observaciones', 255)->nullable();
            $table->string('telefono', 15)->nullable();
            $table->string('email', 70)->unique();
            $table->boolean('activo')->default(1);
            $table->timestamps();

            $table->foreign('localidad_id')->references('id')->on('localidades')->onDelete('cascade')->onUpdate('cascade');
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
