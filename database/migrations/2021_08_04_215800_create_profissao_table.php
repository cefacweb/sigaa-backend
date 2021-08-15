<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfissaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profissao', function (Blueprint $table) {
            $table->integer('COD_PROFISSAO')->primary()->comment('Código da profissão');
            $table->string('DSC_PROFISSAO', 100)->comment('Descrição da profissão');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profissao');
    }
}
