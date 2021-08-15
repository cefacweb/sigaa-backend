<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alimento', function (Blueprint $table) {
            $table->integer('COD_ALIMENTO')->primary();
            $table->string('DSC_ALIMENTO', 20);
            $table->float('VLR_PESO_UNITARIO', 10, 0);
            $table->smallInteger('IND_EVENTUAL')->comment('0=Não e 1=Sim:após ser registrada a entrega do rancho, este deve ser eliminado da tabela de pessoa_alimento.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alimento');
    }
}
