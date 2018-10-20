<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('codigocliente');
            $table->text('nombre')->default(null);
            $table->text('empresa')->default(null);
            $table->text('direccion')->default(null);
            $table->text('telefono')->default(null);
            $table->text('nit')->default(null);
            $table->integer('diascredito')->default(null);
            $table->text('limitecredito')->default(null);
            $table->integer('codigotipocliente')->default(null);
            $table->decimal('porcentajedescuento',18,2)->default(null);

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
        Schema::dropIfExists('clientes');
    }
}
