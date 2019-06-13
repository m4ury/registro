<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('paciente_nombres');
            $table->string('paciente_rut')->unique();
            $table->string('paciente_email')->unique();
            $table->string('paciente_apellido_p');
            $table->string('paciente_apellido_m');
            $table->enum('paciente_sexo',['Masculino', 'Femenino', 'Otro'])->nullable();
            $table->date('paciente_fecha_nacimiento');
            $table->integer('paciente_edad')->nullable();
            $table->string('paciente_direccion')->nullable();
            $table->string('paciente_telefono')->nullable();
            $table->boolean('paciente_jefe_familia')->default(false)->nullable();
            $table->enum('paciente_parentesco', ['Abuelo(a)', 'Padre', 'Madre', 'Esposo(a)', 'Conviviente', 'Hermano(a)', 'Hijo(a)', 'Tio(a)', 'Primo(a)','Suegro(a)', 'Cuñado(a)', 'Sobrino(a)', 'Nieto(a)', 'Nuera', 'Yerno', 'Otro'])->nullable();
            $table->enum('paciente_estado_civil', ['Soltero(a)', 'Casado(a)', 'Viudo(a)', 'Divorciado(a)'])->nullable();
            $table->enum('paciente_escolaridad', ['Sin Escolaridad', 'Pre-Escolar', 'Basica Incompleta', 'Basica Completa', 'Media Incompleta', 'Media Completa', 'Tec Superior Incompleta', 'Tec Superior Completa', 'Superior Incompleta', 'Superior Completa'])->nullable();
            $table->enum('paciente_prevision_salud',[])->nullable();
            $table->unsignedDecimal('paciente_ingreso')->nullable();
            $table->timestamps();

            $table->integer('familia_id')->unsigned()->nullable();
            $table->integer('sector_id')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
