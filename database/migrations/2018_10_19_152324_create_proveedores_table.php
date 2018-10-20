<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->increments('codigoproveedor');
            $table->text('proveedor',100)->default(null);
            $table->text('razonsocial',100)->default(null);
            $table->text('contacto',100)->default(null);
            $table->text('nit',100)->default(null);
            $table->text('telefono',100)->default(null);
            $table->text('fax',100)->default(null);
            $table->text('mobil',100)->default(null);
            $table->text('direccion',100)->default(null);
            $table->text('correo',100)->default(null);

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
        Schema::dropIfExists('proveedors');
    }
}
