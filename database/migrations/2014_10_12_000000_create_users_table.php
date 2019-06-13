<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name');
            $table->string('user_rut')->unique();
            $table->string('email')->unique();
            $table->string('user_apellido_p');
            $table->string('user_apellido_m');
            $table->boolean('activo')->default(1);
            $table->enum('contrato', ['Honorarios', 'Contrata', 'Titular'])->default('Contrata');
            $table->enum('planta', ['Administrativa', 'Profesional', 'Auxiliar', 'Tecnica'])->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->integer('cargo_id')->unsigned()->nullable();
            $table->integer('unidad_id')->unsigned()->nullable();
            $table->integer('profesion_id')->unsigned()->nullable();
            $table->integer('familia_id')->unsigned()->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
