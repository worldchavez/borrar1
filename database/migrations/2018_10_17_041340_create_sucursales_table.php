<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSucursalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursales', function (Blueprint $table) {
            $table->increments('codigosucursales');
            $table->integer('codigoempresa')->default(null);
            $table->integer('numerosucursal')->default(null);
            $table->text('nombre')->default(null);
            $table->text('direccion')->default(null);            
            $table->text('telefono')->default(null);
            $table->tinyInteger('estado')->dafault(null);
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
        Schema::dropIfExists('sucursales');
    }
}
