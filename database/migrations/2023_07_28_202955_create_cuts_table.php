<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cuts', function (Blueprint $table) {
            $table->id();
            $table->string('dt_folionum');
            $table->string('dt_clave');
            $table->string('dt_color');
            $table->string('dt_talla');
            $table->text('dt_descripcion');
            $table->string('dt_piezas');
            $table->string('dt_numbulto');
            $table->text('dt_composicion');
            $table->string('dt_corte');
            $table->string('dt_bano');
            $table->string('dt_codhilos');
            $table->string('dt_numpedido');
            $table->string('dt_status');
            $table->string('dt_ingreso')->nullable();
            $table->string('dt_proceso')->nullable();
            $table->string('dt_terminado')->nullable();
            $table->string('dt_entrega')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuts');
    }
};
