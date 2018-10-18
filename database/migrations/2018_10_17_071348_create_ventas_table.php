<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('codigoventa');
            $table->integer('codigocliente')->default(null);
            $table->integer('codigoformadepago')->default(null);
            $table->integer('codigodocumento')->default(null);
            $table->timestamp('fecha')->default(null);
            $table->integer('codigotrasaccion')->default(null);
            $table->decimal('total',18,2)->default(null);
            $table->integer('cobrocaja')->default(null);
            $table->integer('chequeobodega')->default(null);
            $table->integer('nofactura')->default(null);
            $table->integer('correlativo')->default(null);
            
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
        Schema::dropIfExists('ventas');
    }
}
