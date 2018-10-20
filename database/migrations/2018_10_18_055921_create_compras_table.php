<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('codigocompra');
            $table->timestamp('fecha')->default(null);
            $table->integer('codigoformadepago')->default(null);
            $table->integer('codigoproveedores')->default(null);
            $table->integer('codigoestadotransaccion')->default(null);
            $table->decimal('flete',18,2)->default(null);
            $table->decimal('total',18,2)->default(null);
            $table->integer('codigoasignacionpermiso')->default(null);
            $table->decimal('totalreal',18,2)->default(null);
            $table->integer('codigoestadocompra')->default(null);
          //  $table->timestamp('fechaestimadaingreso')->default(null);
            $table->text('nofactura')->default(null);
            $table->text('descripcion')->default(null);
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
        Schema::dropIfExists('compras');
    }
}
