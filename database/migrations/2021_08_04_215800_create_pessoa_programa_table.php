<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoaProgramaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_programa', function (Blueprint $table) {
            $table->integer('COD_PESSOA')->comment('Código da pessoa que recebe o auxílio');
            $table->integer('COD_ENTIDADE')->comment('Código da entidade que oferece o auxílio');
            $table->integer('COD_PROGRAMA')->comment('Código do programa oferecido à pessoa, pela entidade.');

            $table->primary(['COD_PESSOA', 'COD_ENTIDADE', 'COD_PROGRAMA'],'PRIMARY');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa_programa');
    }
}
