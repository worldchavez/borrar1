<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallecomprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallecompras', function (Blueprint $table) {
            $table->increments('codigodetallecomrpa');
            $table->integer('codigocompra')->default(null);
            $table->integer('codigoproducto')->default(null);
            $table->integer('unidades')->default(null);
            $table->decimal('descuentoefectvo',18,2)->default(null);
            $table->decimal('descuentoporcentaje',18,2)->default(null);
            $table->decimal('costo',18,2)->default(null);
            $table->decimal('total',18,2)->default(null);
            $table->decimal('costoreal',18,2)->default(null);
            $table->decimal('totalreal',18,2)->default(null);
            $table->timestamp('fecha')->default(null);
            $table->decimal('flete',18,2)->default(null);

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
        Schema::dropIfExists('detallecompras');
    }
}
