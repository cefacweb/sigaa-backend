<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoaEscolaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_escola', function (Blueprint $table) {
            $table->integer('COD_ESCOLA')->comment('Código da escola proveniente da tabela Escola');
            $table->integer('COD_PESSOA')->comment('Código do aluno proveniente da tabela Pessoa');
            $table->date('DAT_MATRICULA')->comment('Data de matrícula da pessoa na escola');
            $table->smallInteger('IND_TURNO')->nullable()->comment('Matutino=0;Vespertino=1;Noturno=2');
            $table->string('DSC_TURMA', 10)->nullable()->comment('Descrição da turma que o aluno frequenta');
            $table->smallInteger('IND_REPETENTE')->nullable()->comment('Aluno é repetente?(Sim=1;Não=0)');
            $table->string('DSC_DIFICULDADE_APRENDIZADO', 200)->nullable()->comment('Dificuldade de aprendizagem na escola?');
            $table->string('DSC_PROBLEMA_RELACIONAMENTO', 200)->nullable()->comment('Problema de relacionamento na escola ou em casa?');
            $table->smallInteger('IND_FREQUENTA')->nullable()->comment('Aluno está frequentando a escola?(Sim=1;Não=0)');

            $table->primary(['COD_ESCOLA', 'COD_PESSOA', 'DAT_MATRICULA'],'PRIMARY');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa_escola');
    }
}
