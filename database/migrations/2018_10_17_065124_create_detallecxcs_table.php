<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallecxcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallecxcs', function (Blueprint $table) {
            $table->increments('codigodetallecxc');
            $table->integer('codigocxc')->default(null);
            $table->timestamp('fecha')->default(null);
            $table->decimal('abono',18,2)->default(null);
            $table->integer('codigoasignacionpermiso')->default(null);
            $table->text('descripcion')->default(null);






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
        Schema::dropIfExists('detallecxcs');
    }
}
