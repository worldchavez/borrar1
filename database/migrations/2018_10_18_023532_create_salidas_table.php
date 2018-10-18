<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salidas', function (Blueprint $table) {
            $table->increments('codigosalida');
            $table->timestamp('fecha')->default(null);
            $table->integer('codigomovimiento')->default(null);
            $table->text('descripcion')->default(null);
            $table->integer('codigosucursal')->default(null);
            $table->integer('codigoasignacionpermisos')->default(null);
           
            $table->decimal('total',18,2)->default(null);
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
        Schema::dropIfExists('salidas');
    }
}
