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
        Schema::create('peliculaEstreno', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('descripcion');
            $table->string('year');
            $table->string('reparto');
            $table->string('director');
            $table->string('duracion');
            $table->string('idioma');
            $table->string('imagen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelicula');
    }
};