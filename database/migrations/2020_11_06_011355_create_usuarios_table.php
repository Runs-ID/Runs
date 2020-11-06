<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres', 70)->nullable();
            $table->string('apellidos', 70)->nullable();
            $table->string('dni', 16)->nullable();
            $table->string('telefono', 15)->nullable();
            $table->string('email', 100);
            $table->string('usuario', 20);
            $table->string('clave', 255);
            $table->string('token', 15)->nullable();
            $table->boolean('activo')->default(1);
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
        Schema::dropIfExists('usuarios');
    }
}
