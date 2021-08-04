<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumo', function (Blueprint $table) {
            $table->integer('COD_PERFIL')->comment('Código do perfil da informação de resumo');
            $table->integer('NUM_ORDEM')->comment('Ordem na qual o resumo deve aparecer na tela');
            $table->integer('QTD_HOJE')->nullable()->comment('Resumo de hoje');
            $table->integer('QTD_SEMANA')->nullable()->comment('Resumo da semana');
            $table->integer('QTD_MES')->nullable()->comment('Resumo do mês');
            $table->integer('QTD_ANO')->nullable()->comment('Resumo do ano');
            $table->unique(['COD_PERFIL', 'NUM_ORDEM'], 'IDXRESUMO_COD_PERFIL_NUM_ORDEM');
            $table->primary(['COD_PERFIL', 'NUM_ORDEM']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumo');
    }
}
