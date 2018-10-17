<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('idUsuario');
            $table->text('nombre')->default(null);
            $table->text('dpi')->default(null);
            $table->text('direccion')->default(null);
            $table->text('telefono')->default(null);
            $table->text('correo')->default(null);
            $table->text('contrasenia')->default(null);
            $table->text('fechanacimiento')->default(null);
            $table->text('sueldo')->default(null);
            $table->text('bonificaciondeley')->default(null);
            $table->text('porcentajedecomision')->default(null);
            $table->tinyInteger('estado')->default(null);
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
