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
        Schema::create('peliculacarteleras', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->mediumText('descripcion');
            $table->string('year');
            $table->string('reparto');
            $table->string('director');
            $table->string('duracion');
            $table->string('sala');
            $table->string('idioma');
            $table->string('genero');
            $table->string('imagen');
            $table->dateTime('updated_at');
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peliculacarteleras');
    }
};
