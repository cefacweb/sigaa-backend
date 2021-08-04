<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaSaudeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda_saude', function (Blueprint $table) {
            $table->smallInteger('IND_BENEFICIO')->comment('Indicador do benefício agendado: 0=Dentista; 1=Oftalmologista; 2=Médico; 3=Ótica;');
            $table->integer('COD_PESSOA')->comment('Código da pessoa');
            $table->date('DAT_INICIO_TRATAMENTO')->comment('Data de início do tratamento. Possibilita agrupamento de atendimentos por tratamento.');
            $table->date('DAT_AGENDA')->comment('Data do agendamento');
            $table->integer('COD_AGENDADOR')->comment('Código do trabalhador que fez o agendamento');
            $table->integer('COD_INSTITUICAO')->nullable()->comment('Código da instituição parceira que fez o atendimento');
            $table->date('DAT_ATENDIMENTO')->nullable()->comment('Data de atendimento');
            $table->integer('COD_ATENDENTE')->nullable()->comment('Código do trabalhador que fez o atendimento');
            $table->text('DSC_PROCEDIMENTO')->nullable()->comment('Descrição do(s) procedimento(s) executado(s) no paciente');
            $table->integer('COD_PERFIL')->comment('Código do perfil no qual o paciente será atendido');
            $table->smallInteger('IND_SITUACAO')->comment('Indica situação do atendimento: 0=Pendente; 1=Atendido; 2=Ausência; 3=Concluído; 4=Urgência;');
            $table->primary(['IND_BENEFICIO', 'COD_PESSOA', 'DAT_INICIO_TRATAMENTO', 'DAT_AGENDA']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda_saude');
    }
}
