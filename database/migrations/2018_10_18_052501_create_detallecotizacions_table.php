<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallecotizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallecotizacions', function (Blueprint $table) {
            $table->increments('codigodetallecotizacion');
            $table->integer('codigocotizacion')->default(null);
            $table->integer('codigoproducto')->default(null);
            $table->integer('unidades')->default(null);
            $table->decimal('costo',18,2)->default(null);
            $table->decimal('precio',18,2)->default(null);
            $table->decimal('total',18,2)->default(null);
            $table->text('descripcion')->default(null);

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
        Schema::dropIfExists('detallecotizacions');
    }
}
