<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa', function (Blueprint $table) {
            $table->integer('COD_PESSOA')->primary();
            $table->smallInteger('IND_INSTITUICAO')->default(0)->comment('Indica se o beneficiado é uma pessoa comum (0) ou trata-se de uma instituição ou grupo de pessoas (1).');
            $table->integer('COD_TITULAR')->nullable()->comment('Código do titular (preenchido quando tipo pessoa for conjuge ou dependente)');
            $table->smallInteger('IND_TIPO_PESSOA')->nullable()->comment('Indica o tipo de pessoa (0;Titular;1;Conjuge;2;Dependente)');
            $table->string('NUM_DOCUMENTO', 20)->nullable()->comment('Número do documento (CPF ou Registro Geral)');
            $table->string('NOM_PESSOA', 60)->nullable()->index('IDXPESSOA_NOM_PESSOA')->comment('Nome completo da pessoa');
            $table->date('DAT_NASCIMENTO')->nullable()->comment('Data de nascimento');
            $table->integer('COD_NATURALIDADE')->nullable()->comment('Código da cidade onde nasceu');
            $table->smallInteger('IND_SEXO')->nullable()->default(1)->comment('Masculino(0)/ Feminino(1)');
            $table->integer('COD_CAUSA_MIGRACAO')->nullable()->comment('Código da causa da migração para o município');
            $table->integer('COD_PROFISSAO')->nullable()->comment('Código da profissao');
            $table->string('DSC_LOCAL_TRABALHO', 50)->nullable()->comment('Local onde trabalha');
            $table->string('DSC_HORARIO_TRABALHO', 20)->nullable()->comment('Informação sobre o horário de trabalhos de pais de crianças.');
            $table->smallInteger('NUM_DDD_CELULAR')->nullable();
            $table->string('NUM_CELULAR', 10)->nullable()->comment('Número do celular para contato.');
            $table->smallInteger('NUM_DDD_FONE')->nullable();
            $table->string('NUM_FONE', 10)->nullable()->comment('Número de Telefone para contato');
            $table->string('NOM_CONTATO', 60)->nullable()->comment('Nome da pessoa de contato para o telefone informado');
            $table->float('VLR_RENDA', 10, 0)->nullable()->comment('Renda do titular');
            $table->smallInteger('IND_ESTUDA')->nullable()->default(0)->comment('Estuda? (0=Não, 1=Sim)');
            $table->smallInteger('IND_ESCOLARIDADE')->nullable()->default(14)->comment('Escolaridade (0;Não se aplica;1;Creche;2;Pré-escolar;3;1º do 1ºgrau;4;2º do 1ºgrau;5;3º do 1ºgrau;6;4º do 1ºgrau;7;5º do 1ºgrau;8;6º do 1ºgrau;9;7º do 1ºgrau;10;8º do 1ºgrau;11;1º do 2ºgrau;12;2º do 2ºgrau;13;3º do 2ºgrau;14;Superior Incompleto;15;Superior Completo;16;Analfabeto;17;APAE);');
            $table->integer('COD_PARENTESCO')->nullable()->comment('Código do parentesco');
            $table->smallInteger('IND_MORA_JUNTO')->nullable()->comment('Mora junto com o titular? (0=Não, 1=Sim)');
            $table->string('TAM_ROUPA', 2)->nullable()->comment('Tamanho das roupas (a utilizar para as crianças)');
            $table->smallInteger('NUM_CALCADO')->nullable()->comment('Número do calçado (a utilizar para as crianças)');
            $table->smallInteger('IND_RELIGIAO')->nullable()->comment('Religião (0;Católico;1;Espírita;2;Protestante;3;Assembléia;4;Outros)');
            $table->longText('DSC_OBSERVACAO')->nullable()->comment('Observações gerais da família');
            $table->date('DAT_ATUALIZACAO')->nullable()->comment('Data e hora do cadastramento/atualização');
            $table->integer('COD_ATUALIZADOR')->nullable()->comment('Código do trabalhador que fez o cadastramento/atualização');
            $table->date('DAT_PRIMEIRO_ATENDIMENTO')->nullable()->comment('Data do primeiro atendimento na casa');
            $table->smallInteger('NUM_PONTUACAO_FAMILIA')->nullable()->comment('Pontuação da família: calculada pelo sistema.');
            $table->float('VLR_RENDA_FAMILIA', 10, 0)->nullable()->comment('Renda total da família: calculada pelo sistema.');
            $table->binary('IMG_FOTO')->nullable()->comment('Armazena uma imagem no formato JPG');
            $table->integer('COD_RESPONSAVEL')->nullable()->comment('Código da pessoa responsável pela criança/adolescente menores que 18 anos.
Este campo aplicável apenas as crianças e adolescentes que frequentam os cursos.');
            $table->string('COD_NIS', 11)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa');
    }
}
