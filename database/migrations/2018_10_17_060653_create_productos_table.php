<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('codigoproducto');
            $table->string('nombre',50)->default(null);
            $table->text('descripcion')->default(null);
            $table->integer('codigoproveedor')->default(null);
            $table->integer('codigomarca')->default(null);
            $table->integer('codigoubicacion')->default(null);
            $table->decimal('precio1',18,2)->default(null);
            $table->decimal('precio2',18,2)->default(null);
            $table->decimal('precio3',18,2)->default(null);
            $table->decimal('precio4',18,2)->default(null);
            $table->decimal('costoanterior',18,2)->default(null);
            $table->decimal('costoactual',18,2)->default(null);
            $table->integer('codigocategoria')->default(null);
            $table->integer('codigomedida')->default(null);

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
        Schema::dropIfExists('productos');
    }
}
