<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignaciondepermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignaciondepermisos', function (Blueprint $table) {
            $table->increments('codigoasignaciondepermisos');
            $table->integer('codigosucursal')->default(null);
            $table->integer('codigousuario')->default(null);
            $table->boolean('caja')->default(null);
            $table->boolean('pos')->default(null);
            $table->boolean('cxc')->default(null);
            $table->boolean('configuracion')->default(null);
            $table->boolean('anularventa')->default(null);
            $table->boolean('precioA')->default(null);
            $table->boolean('precioB')->default(null);
            $table->boolean('precioC')->default(null);
            $table->boolean('precioD')->default(null);
            $table->boolean('abajoCosto')->default(null);
            $table->boolean('reporte')->default(null);
            $table->boolean('bajarprecio')->default(null);
            $table->boolean('modificarventa')->default(null);
            $table->boolean('producto')->default(null);
            $table->boolean('compras')->default(null);
            $table->boolean('cxp')->default(null);
            $table->boolean('ventasrealizadas')->default(null);
            $table->boolean('entrada')->default(null);
            $table->boolean('salida')->default(null);
            $table->boolean('activo')->default(null);
            $table->boolean('vercosto')->default(null);
            $table->boolean('cliente')->default(null);

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
        Schema::dropIfExists('asignaciondepermisos');
    }
}
