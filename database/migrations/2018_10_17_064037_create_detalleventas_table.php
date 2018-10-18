<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleventasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleventas', function (Blueprint $table) {
            $table->increments('codigodetalleventa');
            $table->integer('codigoventa')->default(null);
            $table->integer('codigoproducto')->default(null);
            $table->integer('unidades')->default(null);
            $table->decimal('costo',18,2)->default(null);
            $table->decimal('precio',18,2)->default(null);
            $table->decimal('total',18,2)->default(null);
            $table->text('descripccion')->default(null);
            $table->decimal('porcentajedescuento',18,2)->default(null);
             $table->tinyinteger('estado')->default(null);

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
        Schema::dropIfExists('detalleventas');
    }
}
