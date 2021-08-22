<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOficinaProgramadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oficina_programada', function (Blueprint $table) {
            $table->integer('COD_OFICINA')->comment('Código da oficina');
            $table->date('DAT_INICIO')->comment('Data de início da oficina');
            $table->date('DAT_TERMINO')->nullable()->comment('Data de término da oficina (quando preenchido indica oficina encerrada)');
            $table->integer('COD_MONITOR_1')->nullable()->comment('Código do responsável pela oficina');
            $table->integer('COD_MONITOR_2')->nullable();
            $table->smallInteger('IND_DIA_SEMANA1')->nullable()->comment('Indica se a oficina é ministrada no 1º dia da semana');
            $table->smallInteger('IND_DIA_SEMANA2')->nullable()->comment('Indica se a oficina é ministrada no 2º dia da semana');
            $table->smallInteger('IND_DIA_SEMANA3')->nullable()->comment('Indica se a oficina é ministrada no 3º dia da semana');
            $table->smallInteger('IND_DIA_SEMANA4')->nullable()->comment('Indica se a oficina é ministrada no 4º dia da semana');
            $table->smallInteger('IND_DIA_SEMANA5')->nullable()->comment('Indica se a oficina é ministrada no 5º dia da semana');
            $table->smallInteger('IND_DIA_SEMANA6')->nullable()->comment('Indica se a oficina é ministrada no 6º dia da semana');
            $table->smallInteger('IND_DIA_SEMANA7')->nullable()->comment('Indica se a oficina é ministrada no 7º dia da semana');
            $table->longText('DSC_OBSERVACAO')->nullable()->comment('Descrição da observação');
            $table->smallInteger('IND_LAYOUT_CHAMADA')->nullable()->comment('Indica o layout do relatório de chamada a ser impresso');
            $table->smallInteger('NUM_VAGAS')->nullable()->comment('Número de vagas disponíveis para o curso. Zero (0) significa ilimitada');
            $table->smallInteger('IND_OCORRENCIA_DIA1')->nullable()->comment('Indica se há entrega de ranchos na 1ª ocorrência do dia semana para a oficina');
            $table->smallInteger('IND_OCORRENCIA_DIA2')->nullable()->comment('Indica se há entrega de ranchos na 2ª ocorrência do dia semana para a oficina');
            $table->smallInteger('IND_OCORRENCIA_DIA3')->nullable()->comment('Indica se há entrega de ranchos na 3ª ocorrência do dia semana para a oficina');
            $table->smallInteger('IND_OCORRENCIA_DIA4')->nullable()->comment('Indica se há entrega de ranchos na 4ª ocorrência do dia semana para a oficina');
            $table->smallInteger('IND_OCORRENCIA_DIA5')->nullable()->comment('Indica se há entrega de ranchos na 5ª ocorrência do dia semana para a oficina');
            $table->smallInteger('NUM_DURACAO_PRESENCA')->nullable()->comment('Duração do curso em nº de aulas assitidas, para efeito de chamada.');
            $table->smallInteger('IND_PARTICIPA_CAMPANHA_NATAL')->nullable()->comment('Indica se os oficineiros desta oficina participarão (1) ou não (0) da campanha de natal.');
            $table->smallInteger('IND_SITUACAO')->nullable()->default(0)->comment('Indicador para informção sobre a situação da oficina que está programada. (0=Programada; 1=Concluida)');

            $table->primary(['COD_OFICINA', 'DAT_INICIO'],'PRIMARY');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oficina_programada');
    }
}
