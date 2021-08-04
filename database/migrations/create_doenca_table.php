<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoencaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doenca', function (Blueprint $table) {
            $table->integer('COD_DOENCA')->primary()->comment('Código da doença');
            $table->string('DSC_DOENCA', 50)->index('IDXDOENCA_DSC_DOENCA')->comment('Descrição da doença');
            $table->smallInteger('IND_TIPO_DOENCA')->nullable()->default(0)->comment('0=doença, 1=deficiência ou 2=vício');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doenca');
    }
}
