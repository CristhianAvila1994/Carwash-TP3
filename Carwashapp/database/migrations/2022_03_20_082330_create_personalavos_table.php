<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalavosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personalavos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->char('identidad');
            $table->string('Direccion');
            $table->char('telefono');
            $table->integer('codigoEmpleado');
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
        Schema::dropIfExists('personalavos');
    }
}
