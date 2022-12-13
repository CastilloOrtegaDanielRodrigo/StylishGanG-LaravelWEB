<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('url_imagen');
            $table->string('descripcion');
            $table->double('precio', 8, 2);
            $table->double('iva', 8, 2);
            $table->double('precio_neto', 8, 2);
            $table->integer('existencia');
            $table->foreignId('proveedor_id')->references('id')->on('proveedors');
            $table->foreignId('categoria_id')->references('id')->on('categorias');
            $table->foreignId('marca_id')->references('id')->on('marcas');
            $table->timestamps();
            $table->softDeletes();
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
};
