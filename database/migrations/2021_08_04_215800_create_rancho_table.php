<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRanchoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rancho', function (Blueprint $table) {
            $table->integer('COD_PESSOA')->comment('Código da pessoa');
            $table->date('DAT_PREVISTA')->comment('Data de previsão para entrega do rancho');
            $table->smallInteger('IND_RECEBIMENTO')->nullable()->default(0)->comment('Não retirado(0); Retira(1); Entrega(2); Cancelado(3)');
            $table->smallInteger('IND_TIPO_RANCHO')->nullable()->default(1)->comment('Indica se é uma entrega Programada(0), Emergencial(1) e Visita(2)');
            $table->integer('COD_RESPONSAVEL')->nullable()->comment('Trabalhador que montou o rancho');
            $table->integer('COD_ENTREGADOR1')->nullable()->comment('Nome do entregador 1');
            $table->integer('COD_ENTREGADOR2')->nullable()->comment('Nome do entregador 2');
            $table->integer('COD_PERFIL')->nullable()->comment('Código do perfil pelo qual o titular recebe o rancho');
            $table->date('DAT_ENTREGA')->nullable()->comment('Data da entrega');
            $table->float('QTD_TOTAL', 10, 0)->nullable()->default(0)->comment('Quantidade total de produtos em Kgs');

            $table->primary(['COD_PESSOA', 'DAT_PREVISTA'],'PRIMARY');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rancho');
    }
}
