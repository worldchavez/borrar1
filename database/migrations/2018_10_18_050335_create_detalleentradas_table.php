<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleentradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleentradas', function (Blueprint $table) {
            $table->increments('codigodetalleentrada');
            $table->integer('codigoentrada')->default(null);
            $table->integer('codigoproducto')->default(null);
            $table->integer('codigosucursal')->default(null);
            $table->integer('unidades')->default(null);
            $table->decimal('costo',18,2)->default(null);
            $table->decimal('total',18,2)->default(null);
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
        Schema::dropIfExists('detalleentradas');
    }
}
