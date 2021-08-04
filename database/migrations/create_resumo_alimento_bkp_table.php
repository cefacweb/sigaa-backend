<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumoAlimentoBkpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumo_alimento_bkp', function (Blueprint $table) {
            $table->date('DAT_RESUMO');
            $table->integer('COD_PERFIL');
            $table->integer('COD_ALIMENTO');
            $table->float('QTD_ALIMENTO', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumo_alimento_bkp');
    }
}
