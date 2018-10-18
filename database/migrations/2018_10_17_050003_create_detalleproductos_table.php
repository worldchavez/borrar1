<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleproductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleproductos', function (Blueprint $table) {
            $table->increments('codigodetalleproducto');
            $table->integer('codigoproducto')->default(null);
            $table->integer('existenciaminima')->default(null);
            $table->integer('existenciamaxima')->default(null);
            $table->integer('inicial')->default(null);
            $table->integer('compra')->default(null);
            $table->integer('entradas')->default(null);
            $table->integer('salidas')->default(null);
            $table->integer('ventas')->default(null);
            $table->integer('devolucionesprov')->default(null);
            $table->integer('existencia')->default(null);
            $table->integer('codigosucursal')->default(null);
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
        Schema::dropIfExists('detalleproductos');
    }
}
