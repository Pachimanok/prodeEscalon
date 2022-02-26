<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('hora');
            $table->string('fecha');
            $table->string('local');
            $table->string('visitante');
            $table->string('goles_local')->nullable();
            $table->string('goles_visita')->nullable();
            $table->string('ganador')->nullable();
            $table->string('status')->default('activo');
            $table->string('estadio')->nullable();
            $table->string('arbitro')->nullable();
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
        Schema::dropIfExists('partidos');
    }
}
