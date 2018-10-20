<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormadepagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formadepagos', function (Blueprint $table) {
            $table->increments('codigoformadepago');
            $table->text('formadepago')->default(null);
            $table->decimal('porcentaje',18,2)->default(null);
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
        Schema::dropIfExists('formadepagos');
    }
}
