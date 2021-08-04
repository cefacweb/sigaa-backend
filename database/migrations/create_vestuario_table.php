<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVestuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vestuario', function (Blueprint $table) {
            $table->integer('COD_PESSOA')->comment('Código da pessoa');
            $table->date('DAT_AGENDA')->comment('Data do agendamento');
            $table->integer('COD_AGENDADOR')->comment('Código do trabalhador que fez o agendamento');
            $table->date('DAT_ATENDIMENTO')->nullable()->comment('Data de atendimento');
            $table->integer('COD_ATENDENTE')->nullable()->comment('Código do trabalhador que fez o atendimento');
            $table->text('DSC_OBSERVACAO')->nullable();
            $table->smallInteger('QTD_PESSOAS')->nullable()->comment('Quantidade de pessoas da família que receberam peças de vestuário');
            $table->index(['COD_PESSOA', 'DAT_AGENDA'], 'IDXVESTUARIO_COD_PESSOA_DAT_AGENDA');
            $table->primary(['COD_PESSOA', 'DAT_AGENDA']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vestuario');
    }
}
