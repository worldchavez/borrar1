<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesalidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallesalidas', function (Blueprint $table) {
            $table->increments('codigodetallesalida');
            $table->integer('codigosalida')->default(null);
            $table->integer('codigoproducto')->default(null);
            $table->integer('unidades')->default(null);
            $table->decimal('costo',18,2)->default(null);
            $table->decimal('total',18,2)->default(null);

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
        Schema::dropIfExists('detallesalidas');
    }
}
