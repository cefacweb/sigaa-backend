<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoaOdontoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_odonto', function (Blueprint $table) {
            $table->integer('COD_PESSOA')->primary()->comment('Código da pessoa');
            $table->text('DSC_HISTORICO_VIDA')->nullable()->comment('Descrição do histórico de vida do paciente');
            $table->text('DSC_EXAME_CLINICO')->nullable()->comment('Descrição de todos os problemas de saúde que o paciente já teve');
            $table->date('DAT_ATUALIZACAO')->comment('Data de atualização dos dados do paciente');
            $table->integer('COD_ATUALIZADOR')->comment('Código da pessoa que atualizou os dados do paciente');
            $table->date('DAT_ATENDIMENTO')->comment('Data do primeiro registro de atendimento do paciente');
            $table->integer('COD_ATENDENTE')->comment('Código da pessoa que fez o primeiro registro de atendimento do paciente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa_odonto');
    }
}
