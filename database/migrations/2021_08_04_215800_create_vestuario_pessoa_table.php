<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVestuarioPessoaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vestuario_pessoa', function (Blueprint $table) {
            $table->integer('COD_PESSOA');
            $table->date('DAT_AGENDA')->comment('Data da programação de entrega');
            $table->string('NOM_BENEFICIARIO', 68)->comment('Nome e idade da pessoa que poderá receber as peças de vestuário');
            $table->smallInteger('IND_RETIRADO')->nullable()->comment('Indica se a pessoa retirou ou não a peça de vestuário');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vestuario_pessoa');
    }
}
