<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumoFamiliaTmpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumo_familia_tmp', function (Blueprint $table) {
            $table->integer('COD_PERFIL');
            $table->integer('COD_TITULAR');
            $table->smallInteger('IND_PERIODO')->nullable();
            $table->string('DSC_BENEFICIO', 3)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumo_familia_tmp');
    }
}
