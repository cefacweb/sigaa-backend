<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoradorObservacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('morador_observacao', function (Blueprint $table) {
            $table->integer('COD_MORADOR')->comment('Código do morador de rua');
            $table->timestamp('DAT_OBSERVACAO')->comment('Data e hora do registro da observação');
            $table->integer('COD_ATENDENTE1')->comment('Trabalhador que atendeu ao morador de rua');
            $table->longText('DSC_OBSERVACAO')->comment('Descrição da observação');
            $table->primary(['COD_MORADOR', 'DAT_OBSERVACAO']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('morador_observacao');
    }
}
