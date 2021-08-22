<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioHorarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_horario', function (Blueprint $table) {
            $table->integer('COD_USUARIO')->comment('Código do usuário');
            $table->smallInteger('NUM_DIA_SEMANA')->comment('Dia da semana na qual o usuário presta serviço voluntário.');
            $table->time('HOR_INICIO')->comment('Hora de início da prestação de voluntariado.');
            $table->time('HOR_FIM')->comment('Hora de término da prestação de voluntariado.');

            $table->primary(['COD_USUARIO', 'NUM_DIA_SEMANA', 'HOR_INICIO'],'PRIMARY');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_horario');
    }
}
