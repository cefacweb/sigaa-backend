<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoaGestacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_gestacao', function (Blueprint $table) {
            $table->integer('COD_PESSOA')->comment('Código da pessoa proveniente da tabela Pessoa');
            $table->date('DAT_REGISTRO_GESTACAO')->comment('Data de registro da gestação atual no SIGAA');
            $table->string('NUM_CARTEIRA_PRE_NATAL', 20)->nullable()->comment('Número da certeira de Pré-Natal');
            $table->string('NOM_LOCAL_PRE_NATAL', 100)->nullable()->comment('Local onde faz o Pré-Natal');
            $table->date('DAT_ULTIMA_MENSTRUACAO')->nullable()->comment('Data da última menstruação');
            $table->date('DAT_PROVAVEL_PARTO')->nullable()->comment('Data provável do parto');
            $table->integer('NUM_MESES_GESTACAO')->nullable()->comment('Número de meses da gestação');
            $table->smallInteger('IND_EXAME_CANCER')->nullable()->comment('Faz exame preventivo de câncer periodicamente? (0=Não, 1=Sim)');
            $table->smallInteger('IND_SEXO_BEBE')->nullable()->comment('Sexo do bebê: Masculino(0)/Feminino(1)');
            $table->smallInteger('QTD_BEBE_MASCULINO')->nullable()->comment('Quantidade de bebês do sexo masculino na atual gestação.');
            $table->smallInteger('QTD_BEBE_FEMININO')->nullable()->comment('Quantidade de bebês do sexo feminino na atual gestação.');
            $table->smallInteger('IND_PRI_ENXOVAL')->nullable()->comment('Recebeu primeira parte do enxoval? (0=Não, 1=Sim)');
            $table->smallInteger('QTD_PRI_ENXOVAL')->nullable()->comment('Quantidade de primeiras partes de enxoval entregues na atual gestação.');
            $table->smallInteger('IND_SEG_ENXOVAL')->nullable()->comment('Recebeu segunda parte do enxoval? (0=Não, 1=Sim)');
            $table->smallInteger('QTD_SEG_ENXOVAL')->nullable()->comment('Quantidade de segundas partes de enxoval entregues na atual gestação.');
            $table->integer('COD_ENTREGADOR1')->nullable()->comment('Código do trabalhador que fez a entrega da 1ª metade');
            $table->date('DAT_ENTREGA1')->nullable()->comment('Data de entrega da 1ª metade do enxoval');
            $table->integer('COD_ENTREGADOR2')->nullable()->comment('Código do trabalhador que fez a entrega da 2ª metade');
            $table->date('DAT_ENTREGA2')->nullable()->comment('Data de entrega da 2ª metade do enxoval');
            $table->integer('COD_ATUALIZADOR')->nullable();
            $table->date('DAT_ATUALIZACAO')->nullable();

            $table->primary(['COD_PESSOA', 'DAT_REGISTRO_GESTACAO'],'PRIMARY');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa_gestacao');
    }
}
