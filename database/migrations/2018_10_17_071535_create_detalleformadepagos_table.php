<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleformadepagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleformadepagos', function (Blueprint $table) {
            $table->increments('codigodetalleformadepago');
            $table->integer('codigoventa')->default(null);
            $table->decimal('contado',18,2)->default(null);
            $table->decimal('tarjeta',18,2)->default(null);
            $table->decimal('cheque',18,2)->default(null);
            $table->decimal('deposito',18,2)->default(null);
            $table->decimal('recargo',18,2)->default(null);
            $table->decimal('credito',18,2)->default(null);

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
        Schema::dropIfExists('detalleformadepagos');
    }
}
