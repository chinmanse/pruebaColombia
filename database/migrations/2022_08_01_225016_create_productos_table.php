<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();

            $table->string('nombre', 50);
            $table->string('descripcion', 150);
            $table->string('abreviacion', 3);
            $table->decimal('costo', 10,2);
            $table->integer('estado')->default(1);
            $table->unsignedBigInteger('tipo_producto_id');
            $table->foreign('tipo_producto_id')->references('id')->on("tipo_productos");
            

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
