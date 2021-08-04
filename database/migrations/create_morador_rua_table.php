<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoradorRuaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('morador_rua', function (Blueprint $table) {
            $table->integer('COD_MORADOR')->primary();
            $table->string('NOM_MORADOR', 60)->index('IDXMORADOR_RUA_NOM_MORADOR')->comment('Nome do morador de rua');
            $table->date('DAT_NASCIMENTO')->nullable()->comment('Data de nascimento do morador de rua');
            $table->string('NUM_DOCUMENTO', 20)->nullable()->comment('Número do documento (CPF ou Registro Geral)');
            $table->integer('COD_NATURALIDADE')->nullable()->comment('Cidade de nascimento');
            $table->integer('COD_CAUSA_MIGRACAO')->nullable();
            $table->smallInteger('IND_SEXO')->nullable()->default(1)->comment('Masculino(0)/ Feminino(1)');
            $table->smallInteger('IND_ESCOLARIDADE')->nullable()->default(14)->comment('Escolaridade (0;Não se aplica;1;Creche;2;Pré-escolar;3;1º do 1ºgrau;4;2º do 1ºgrau;5;3º do 1ºgrau;6;4º do 1ºgrau;7;5º do 1ºgrau;8;6º do 1ºgrau;9;7º do 1ºgrau;10;8º do 1ºgrau;11;1º do 2ºgrau;12;2º do 2ºgrau;13;3º do 2ºgrau;14;Superior Incompleto;15;Superior Completo;16;Analfabeto;17;APAE;18;Ensino Fundamental;19;Ensino Médio);');
            $table->string('DSC_EXP_PROFISSIONAL', 60)->nullable()->comment('Experiência profissionald do morador de rua');
            $table->string('DSC_ENDERECO', 100)->nullable()->comment('Local onde o morador de rua está estabelecido');
            $table->date('DAT_IDA_RUA')->nullable()->comment('Data representando o ano em que o assistido passou a morar na rua');
            $table->smallInteger('IND_MORAR_CASA')->nullable()->comment('Indica se o morador tem interesse em morar em uma casa. (0=Não;1=Sim)');
            $table->smallInteger('IND_TRABALHAR')->nullable()->comment('Indica se o morador tem interesse em trabalhar. (0=Não; 1=Sim)');
            $table->string('DSC_DOCS_EM_FALTA', 50)->nullable()->comment('Documentos que o morador de rua não possui e necessita providenciar.');
            $table->text('DSC_FICHA_CRIMINAL')->nullable()->comment('Descrição da ficha criminal do morador de rua.');
            $table->text('DSC_DEPENDENTE')->nullable()->comment('Descrição dos dependentes que o morador de rua por ventura possua.');
            $table->text('DSC_CURSOS_INTERESSE')->nullable()->comment('Cursos que o morador de rua possa ter interesse em frequentar.');
            $table->text('DSC_BEM_ESSENCIAL')->nullable()->comment('Bem essencial que está faltando em casa.');
            $table->longText('DSC_OBSERVACAO')->nullable()->comment('Observações gerais sobre o morador de rua.');
            $table->date('DAT_PRIMEIRO_ATENDIMENTO')->nullable()->comment('Data do primeiro atendimento na casa');
            $table->date('DAT_ATUALIZACAO')->nullable()->comment('Data e hora do cadastramento/atualização');
            $table->integer('COD_ATUALIZADOR')->nullable()->comment('Código do trabalhador que fez o cadastramento/atualização');
            $table->binary('IMG_FOTO')->nullable()->comment('Armazena uma imagem no formato JPG');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('morador_rua');
    }
}
