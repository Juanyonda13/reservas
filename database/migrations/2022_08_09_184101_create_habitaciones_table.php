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
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id();
            $table->float('precio_por_noche')->length(12,2);
            $table->integer('piso')->length(10);
            $table->integer('max_personas')->length(12,2);
            $table->integer('tiene_cama_bebe')->length(12);
            $table->integer('tiene_ducha')->length(12);
            $table->integer('tiene_baño')->length(12);
            $table->integer('tiene_balcon')->length(12);
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
        Schema::dropIfExists('habitaciones');
    }
};
