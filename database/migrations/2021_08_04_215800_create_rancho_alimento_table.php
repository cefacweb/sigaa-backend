<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRanchoAlimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rancho_alimento', function (Blueprint $table) {
            $table->integer('COD_PESSOA');
            $table->date('DAT_PREVISTA')->comment('Data prevista para entrega');
            $table->integer('COD_ALIMENTO');
            $table->date('DAT_ENTREGA');
            $table->float('QTD_ALIMENTO', 10, 0)->nullable()->default(0);

            $table->primary(['COD_PESSOA', 'DAT_PREVISTA', 'COD_ALIMENTO'],'PRIMARY');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rancho_alimento');
    }
}
