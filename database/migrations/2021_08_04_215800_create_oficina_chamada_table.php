<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOficinaChamadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oficina_chamada', function (Blueprint $table) {
            $table->integer('COD_OFICINA')->comment('Código da oficina');
            $table->date('DAT_INICIO')->comment('Data de início da oficina');
            $table->integer('COD_PESSOA')->comment('Código da pessoa');
            $table->date('DAT_MATRICULA')->comment('Data de matrícula do assistido na oficina. Viabiliza múltiplas oficinas.');
            $table->date('DAT_OFICINA')->comment('Data na qual a pessoa faltou à oficina');
            $table->smallInteger('IND_SITUACAO')->nullable()->comment('Indica se a pessoa estava Ausente(0); Presente(1); Justificou auseência(2);');

            $table->primary(['COD_OFICINA', 'DAT_INICIO', 'COD_PESSOA', 'DAT_MATRICULA', 'DAT_OFICINA'],'PRIMARY');
            $table->index(['COD_OFICINA', 'COD_PESSOA', 'DAT_OFICINA'],'AK_OFICINA_PESSOA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oficina_chamada');
    }
}
