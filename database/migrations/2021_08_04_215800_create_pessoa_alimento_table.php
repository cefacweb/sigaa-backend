<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoaAlimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_alimento', function (Blueprint $table) {
            $table->integer('COD_PESSOA');
            $table->integer('COD_ALIMENTO');
            $table->float('QTD_ALIMENTO', 10, 0)->nullable()->comment('Quantidade (Kg) de alimento a ser entregue');

            $table->primary(['COD_PESSOA', 'COD_ALIMENTO'],'PRIMARY');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa_alimento');
    }
}
