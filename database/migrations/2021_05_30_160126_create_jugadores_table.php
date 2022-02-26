<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJugadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadores', function (Blueprint $table) {
            $table->id();
            $table->string('usuario');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('celular');
            $table->string('mail');
            $table->string('pago')->nullable();
            $table->string('participacion_fecha')->nullable();
            $table->string('participacion_ronda')->nullable();
            $table->string('estado')->default('activo');
            $table->string('puntos')->nullable();
            $table->string('ptos_gl')->nullable();
            $table->string('ptos_lv')->nullable();
            $table->string('ptos_rs')->nullable();
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
        Schema::dropIfExists('jugadores');
    }
}
