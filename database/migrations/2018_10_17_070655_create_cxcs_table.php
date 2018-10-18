<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCxcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cxcs', function (Blueprint $table) {
            $table->increments('codigocxc');
            $table->integer('codigoventa')->default(null);
            $table->timestamp('fechainicial')->default(null);
            $table->decimal('abono',18,2)->default(null);
            $table->decimal('monto')->default(null);
            $table->text('comentario')->default(null);


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
        Schema::dropIfExists('cxcs');
    }
}
