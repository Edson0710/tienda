<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('nombre');
            // Posiblemente se va a dividir en columnas la direccion
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email');
            $table->unsignedBigInteger('estado_id');
            $table->date('fecha_compra');
            $table->date('fecha_envio')->nullable();
            $table->date('fecha_entrega')->nullable();
            $table->timestamps();
            $table->foreign('estado_id')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
