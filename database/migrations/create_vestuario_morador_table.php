<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVestuarioMoradorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vestuario_morador', function (Blueprint $table) {
            $table->integer('COD_MORADOR')->comment('Código da pessoa');
            $table->date('DAT_AGENDA')->comment('Data do agendamento');
            $table->integer('COD_AGENDADOR')->comment('Código do trabalhador que fez o agendamento');
            $table->date('DAT_ATENDIMENTO')->nullable()->comment('Data de atendimento');
            $table->integer('COD_ATENDENTE')->nullable()->comment('Código do trabalhador que fez o atendimento');
            $table->text('DSC_OBSERVACAO')->nullable();
            $table->smallInteger('QTD_PESSOAS')->nullable()->default(1)->comment('Quantidade de pessoas da família que receberam peças de vestuário');
            $table->unique(['COD_MORADOR', 'DAT_AGENDA'], 'IDXVESTUARIO_MORADOR_COD_MORADOR_DAT_AGENDA');
            $table->primary(['COD_MORADOR', 'DAT_AGENDA']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vestuario_morador');
    }
}
