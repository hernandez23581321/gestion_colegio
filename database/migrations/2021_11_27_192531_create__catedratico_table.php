<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatedraticoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catedratico', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_catedratico');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->string('especialidad');
            $table->boolean('estado');
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
        Schema::dropIfExists('catedratico');
    }
}
