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
        Schema::create('huespedes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres',46);
            $table->string('apellidos',46);
            $table->integer('telefono')->length(11);
            $table->string('correo',46);
            $table->string('direccion',46);
            $table->string('ciudad',46);
            $table->string('pais',46);
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
        Schema::dropIfExists('huespedes');
    }
};
