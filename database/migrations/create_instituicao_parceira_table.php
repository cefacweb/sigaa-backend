<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstituicaoParceiraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituicao_parceira', function (Blueprint $table) {
            $table->integer('COD_INSTITUICAO')->primary()->comment('Código da instituição parceira');
            $table->string('NOM_INSTITUICAO', 100)->comment('Nome da instituição parceira');
            $table->string('DSC_ENDERECO', 100)->nullable()->comment('Endereço da instituição parceira');
            $table->integer('COD_BAIRRO')->nullable()->comment('Bairro da instituição parceira');
            $table->integer('COD_CIDADE')->nullable()->comment('Cidade da instituição parceira');
            $table->string('NUM_FONE1', 14)->nullable()->comment('Número do primeiro telefone da instituição parceira');
            $table->string('NUM_FONE2', 14)->nullable()->comment('Número do segundo telefone da instituição parceira');
            $table->string('NOM_CONTATO', 60)->nullable()->comment('Nome da pessoa de contato da instituição parceira');
            $table->string('DSC_EMAIL', 50)->nullable()->comment('Descrição do email da instituição parceira');
            $table->integer('COD_TIPO_PARCERIA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instituicao_parceira');
    }
}
