<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('familia_tipo', ['Unipersonal', 'Nuclear', 'Nuclear Biparental', 'Nuclear Monoparental', 'Reconstituida', 'Extendida'])->nullable();
            $table->enum('familia_etapa', ['Formacion de Pareja', 'Crianza inicial', 'Con Hijo Preescolar', 'Con Hijo Escolar', 'Con Hijo Adolescente', 'Plataforma de Lanzamiento', 'Nido Vacio', 'Adulto Mayor'])->nullable();
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
        Schema::dropIfExists('familias');
    }
}
