<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoencaPessoaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doenca_pessoa', function (Blueprint $table) {
            $table->integer('COD_PESSOA')->comment('Código da pessoa');
            $table->integer('COD_DOENCA')->comment('Código da doença');
            $table->smallInteger('IND_IMPEDE_TRABALHAR')->nullable()->default(0)->comment('Impede de trabalhar? (0=Não, 1=Sim)');
            $table->unique(['COD_PESSOA', 'COD_DOENCA'], 'IDXDOENCA_PESSOA_COD_PESSOA_COD_DOENCA');
            $table->primary(['COD_PESSOA', 'COD_DOENCA']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doenca_pessoa');
    }
}
