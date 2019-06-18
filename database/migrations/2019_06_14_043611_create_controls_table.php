<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('control_tipo')->nullable();
            $table->longText('control_observacion')->nullable();
            $table->string('control_tipo')->nullable();
            $table->date('control_fecha_prox_control')->nullable();
            $table->time('control_hora_prox_control')->nullable();
            $table->decimal('control_peso')->nullable;
            $table->decimal('control_talla')->nullable;
            $table->integer('control_imc')->nullable;
            $table->string('control_rcv')->nullable;

            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('paciente_id')->nullable();

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
        Schema::dropIfExists('controls');
    }
}
