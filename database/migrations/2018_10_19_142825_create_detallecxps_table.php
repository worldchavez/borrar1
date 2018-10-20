<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallecxpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallecxps', function (Blueprint $table) {
            $table->increments('codigodetallecxp');
            $table->integer('codigocxp')->default(null);
            $table->timestamp('fecha')->default(null);
            $table->decimal('abono',18,2)->default(null);
            $table->decimal('saldoanterios',18,2)->default(null);
            $table->text('descripcion')->default(null);
            $table->integer('cheque')->default(null);
            $table->integer('notacredito')->default(null);
            $table->decimal('monto',18,2)->default(null);
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
        Schema::dropIfExists('detallecxps');
    }
}
