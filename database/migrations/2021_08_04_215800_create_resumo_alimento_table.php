<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumoAlimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumo_alimento', function (Blueprint $table) {
            $table->date('DAT_RESUMO')->comment('Data de resumo');
            $table->integer('COD_PERFIL')->comment('Código do perfil para o qual foi computada a entrega do alimento');
            $table->integer('COD_ALIMENTO')->comment('Código do alimento entregue na data');
            $table->float('QTD_ALIMENTO', 10, 0)->nullable()->comment('Quantidade de alimento entregue na data');

            $table->primary(['DAT_RESUMO', 'COD_PERFIL', 'COD_ALIMENTO'],'PRIMARY');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumo_alimento');
    }
}
