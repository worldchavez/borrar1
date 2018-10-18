<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCotizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizacions', function (Blueprint $table) {
            $table->increments('codigocotizacion');
            $table->integer('codigocliente')->default(null);
            $table->integer('codigoformadepago')->default(null);
            $table->integer('codigodocumento')->default(null);
            $table->timestamp('fecha')->default(null);
            $table->integer('codigousuario')->default(null);
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
        Schema::dropIfExists('cotizacions');
    }
}
