<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametro', function (Blueprint $table) {
            $table->decimal('VLR_SALARIO_REF', 38, 0)->nullable()->comment('Valor do Salário Referência');
            $table->smallInteger('QTD_DURACAO_RANCHO')->comment('Período (meses) da duração de entrega de ranchos após cada avaliação');
            $table->integer('COD_CIDADE_PADRAO')->nullable()->comment('Cidade padrão para novas inclusões');
            $table->smallInteger('NUM_DDD_PADRAO')->nullable();
            $table->smallInteger('MAX_IDADE_CAMPANHA')->comment('Limita a idade das crianças que participarão das campanhas realizadas na casa');
            $table->string('NOM_ENTIDADE_SEDE', 80)->nullable()->comment('Nome da sede religiosa da entidade que utiliza o SIGAA');
            $table->string('NUM_CNPJ_SEDE', 18)->nullable()->comment('CNPJ da sede religiosa da entidade que utiliza o SIGAA');
            $table->string('DSC_ENDERECO_SEDE', 100)->nullable()->comment('Endereço da sede da entidade');
            $table->string('NUM_CEP_SEDE', 9)->nullable()->comment('Número do CEP da sede da entidade');
            $table->integer('COD_BAIRRO_SEDE')->nullable()->comment('Bairro onde encontra-se a sede da entidade');
            $table->integer('COD_CIDADE_SEDE')->nullable()->comment('Código da cidade onde a sede religiosa está localizada');
            $table->string('NOM_ENTIDADE_ASSISTENCIA', 80)->nullable()->comment('Nome da sede assistencial da entidade que utiliza o SIGAA');
            $table->string('NUM_CNPJ_ASSISTENCIA', 18)->nullable()->comment('CNPJ da entidade que utiliza o SIGAA');
            $table->string('DSC_ENDERECO_ASSISTENCIA', 100)->nullable()->comment('Endereço da sede assistencial da entidade');
            $table->string('NUM_CEP_ASSISTENCIA', 9)->nullable()->comment('Número do CEP da sede assistencial da entidade');
            $table->integer('COD_BAIRRO_ASSISTENCIA')->nullable()->comment('Bairro onde encontra-se a sede assistencial da entidade');
            $table->integer('COD_CIDADE_ASSISTENCIA')->nullable()->comment('Código da cidade onde a sede assistencial está localizada');
            $table->binary('IMG_LOGOTIPO')->nullable()->comment('Armazena o logotipo a ser utilizado na impressão dos relatórios');
            $table->smallInteger('NUM_MAX_ITENS_RANCHO')->nullable()->comment('Número máximo de ítens permitido por rancho emergencial.');
            $table->dateTime('DAT_ATUALIZACAO_RESUMO')->nullable()->comment('Data da última atualização da tabela de Resumo');
            $table->dateTime('DAT_EXECUCAO_AUTOMACAO')->nullable()->comment('Data e hora da execução da rotina de automação do sistema. Tem por objetivo, regular a execução da rotina apenas uma vez no dia.');
            $table->smallInteger('NUM_MINUTOS_OCIOSOS')->default(0);
            $table->smallInteger('MAX_FALTAS_CHAMADA')->nullable()->default(4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parametro');
    }
}
