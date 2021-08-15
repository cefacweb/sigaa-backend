<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoaComplementoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_complemento', function (Blueprint $table) {
            $table->integer('COD_PESSOA')->primary()->comment('Código da pessoa proveniente da tabela Pessoa');
            $table->smallInteger('IND_ESTADO_CIVIL')->nullable()->default(0)->comment('Estado civil (0;Solteiro(a);1;Casado(a);2;Separado(a);3;Junto(a);4;Divorciado(a);5;Abandonado(a);6;Viúvo(a))');
            $table->string('DSC_ENDERECO', 100)->nullable()->comment('Endereço de residência');
            $table->integer('COD_BAIRRO')->nullable()->comment('Bairro onde reside');
            $table->string('DSC_REFERENCIA')->nullable()->comment('Local de referência para encontrar a residência');
            $table->integer('COD_CIDADE')->nullable()->comment('Código da cidade onde reside');
            $table->string('DSC_TEMPO_RESIDENCIA', 20)->nullable()->comment('Tempo em que o titular reside no endereço informado');
            $table->smallInteger('IND_USO_CONTINUO')->nullable()->default(0)->comment('Necessita medicamento de uso contínuo? (0=Não, 1=Sim)');
            $table->smallInteger('IND_TIPO_TERRENO')->nullable()->default(0)->comment('Tipo de terreno (0;Próprio;1;Cedido;2;Invadido)');
            $table->smallInteger('IND_TIPO_MORADIA')->nullable()->default(0)->comment('Tipo de moradia (0;Própria;1;Alugada;2;Cedida)');
            $table->smallInteger('IND_MATERIAL_MORADIA')->nullable()->default(0)->comment('Tipo de material que compõe a moradia (0;Alvenaria;1;Madeira;2;Mista;3;Outros)');
            $table->float('VLR_ALUGUEL', 10, 0)->nullable()->default(0)->comment('Valor do aluguel');
            $table->smallInteger('IND_FONTE_ENERGIA')->nullable()->default(0)->comment('Fonte de energia (0;CELESC;1;Rabicho;2;Não tem)');
            $table->smallInteger('IND_FONTE_AGUA')->nullable()->default(0)->comment('Fonte de água (0;SAMAE;1;Fonte/Rio;2;Poço;3;Clandestino;4;Caminhão Pipa)');
            $table->smallInteger('IND_MORA_AREA_RISCO')->nullable()->comment('Mora em área de risco? (0=Não, 1=Sim)');
            $table->smallInteger('IND_ESGOTO')->nullable()->default(0)->comment('Possui esgoto? (0=Não, 1=Sim)');
            $table->smallInteger('IND_FOSSA')->nullable()->default(0)->comment('Possui fossa? (0=Não, 1=Sim)');
            $table->float('VLR_AGUA_LUZ', 10, 0)->nullable()->default(0)->comment('Gasto aprox com água e  luz');
            $table->float('VLR_TELEFONE', 10, 0)->nullable()->comment('Valor gasto com telefone');
            $table->float('VLR_MEDICAMENTO', 10, 0)->nullable()->default(0)->comment('Gasto mensal com medicamentos');
            $table->smallInteger('IND_FOGAO')->nullable()->default(1)->comment('Possui fogão? (0=Não, 1=Sim)');
            $table->smallInteger('IND_GELADEIRA')->nullable()->default(1)->comment('Possui geladeira? (0=Não, 1=Sim)');
            $table->smallInteger('IND_TV')->nullable()->default(1)->comment('Possui tv? (0=Não, 1=Sim)');
            $table->smallInteger('IND_SOM')->nullable()->default(1)->comment('Possui aparelho de som? (0=Não, 1=Sim)');
            $table->smallInteger('IND_MAQUINA_LAVAR')->nullable()->comment('Possui máquina de lavar roupas? (0=Não, 1=Sim)');
            $table->smallInteger('IND_VIDEO_CASSETE')->nullable()->comment('Possui vídeo cassete? (0=Não, 1=Sim)');
            $table->string('DSC_OUTROS_BENS')->nullable()->comment('Outros bens domésticos');
            $table->smallInteger('IND_PROBLEMAS_FAMILIA')->nullable()->default(0)->comment('Pontuação - Indicador de problemas tais como: abandono e doenças (0=Não, 1=Sim)');
            $table->smallInteger('IND_OUTROS_PROBLEMAS_FAMILIA')->nullable()->default(0)->comment('Pontuação - Indicador de outros problemas na família (0=Não, 1=Sim)');
            $table->smallInteger('IND_RETIRA_RANCHO')->nullable()->comment('Indica se o assitido retira o rancho ou se deve ser entregue em sua casa');
            $table->date('DAT_SOLICITACAO_VISITA')->nullable()->comment('Data da solicitação de visita pelo entrevistador. Nulo se não visitar.');
            $table->text('DSC_HISTORICO_ALTERACOES')->nullable()->comment('Histórico de alterações');
            $table->integer('COD_PERFIL')->nullable()->comment('Código do Perfil onde será computado o rancho da família');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa_complemento');
    }
}
