<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cajas', function (Blueprint $table) {
            $table->increments('codigocaja');
            $table->decimal('montoinicial',18,2)->default(null);
            $table->decimal('faltante',18,2)->default(null);
            $table->decimal('sobrante',18,2)->default(null);
            $table->text('comentario')->default(null);
            $table->integer('codigoasignacionpermisos')->default(null);
            $table->integer('codigosucursal')->default(null);

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
        Schema::dropIfExists('cajas');
    }
}
