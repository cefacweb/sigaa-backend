<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumoOrdemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumo_ordem', function (Blueprint $table) {
            $table->integer('NUM_ORDEM')->primary();
            $table->string('DSC_RESUMO', 100);
            $table->smallInteger('IND_CLASSE_RESUMO')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumo_ordem');
    }
}
