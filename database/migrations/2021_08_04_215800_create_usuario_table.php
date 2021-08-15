<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->integer('COD_USUARIO')->primary()->comment('Código do trabalhador da casa');
            $table->smallInteger('IND_TIPO_USUARIO')->nullable()->comment('Tipo do usuário (0-Não Usuário SIGAA/1-Usuário SIGAA)');
            $table->string('DSC_APELIDO', 45)->comment('Apelido (nome curto) do trabalhador da casa');
            $table->string('NOM_USUARIO', 75)->nullable()->comment('Nome completo do trabalhador da casa');
            $table->string('NUM_DOCUMENTO', 20)->nullable()->comment('Nro do documento(CPF ou RG) do trabalhador da casa');
            $table->date('DAT_NASCIMENTO')->nullable()->comment('Data de nascimento do trabalhador da casa');
            $table->string('DSC_AUTOMOVEL', 30)->nullable()->comment('Descrição do automóvel do trabalhador da casa');
            $table->string('DSC_PLACA', 7)->nullable()->comment('Placa do automóvel do trabalhador da casa');
            $table->string('DSC_ENDERECO', 100)->nullable()->comment('Endereço domiciliar do trabalhador da casa');
            $table->integer('COD_BAIRRO')->nullable()->comment('Código do bairro onde o trabalhador da casa reside');
            $table->smallInteger('NUM_DDD_RESIDENCIAL')->nullable();
            $table->string('NUM_FONE_RESIDENCIAL', 10)->nullable()->comment('Número do telefone residencial do trabalhador da casa');
            $table->smallInteger('NUM_DDD_COMERCIAL')->nullable();
            $table->string('NUM_FONE_COMERCIAL', 10)->nullable()->comment('Número do telefone comercial do trabalhador da casa');
            $table->smallInteger('NUM_DDD_CELULAR')->nullable();
            $table->string('NUM_FONE_CELULAR', 10)->nullable()->comment('Número do celular do trabalhador da casa');
            $table->string('DSC_EMAIL', 50)->nullable()->comment('Email do trabalhador da casa');
            $table->smallInteger('IND_ESCOLARIDADE')->nullable()->comment('Escolaridade (0;Analfabeto;1;1º do 1ºgrau;2;2º do 1ºgrau;3;3º do 1ºgrau;4;4º do 1ºgrau;5;5º do 1ºgrau;6;6º do 1ºgrau;7;7º do 1ºgrau;8;8º do 1ºgrau;9;1º do 2ºgrau;10;2º do 2ºgrau;11;3º do 2ºgrau;12;Superior Incompleto;13;Superior Completo;14;Pós-Graduação;15;Mestrado;16;Doutorado);');
            $table->smallInteger('COD_TAREFA')->nullable()->comment('Tarefa realizada pelo trabalhador na casa');
            $table->smallInteger('IND_STATUS')->nullable()->comment('Trabalhador está ativo? (0=Não, 1=Sim)');
            $table->integer('COD_CIDADE')->nullable()->comment('Cidade onde o trabalhador reside');
            $table->date('DAT_EMISSAO_TERMO')->nullable()->comment('Data de emissão do termo de voluntariado.');
            $table->string('DSC_SENHA_ACESSO', 24)->nullable()->comment('Senha de acesso ao sistema');
            $table->binary('IMG_FOTO')->nullable()->comment('Armazena uma imagem no formato JPG');
            $table->string('DSC_SENHA_WEB', 40)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
