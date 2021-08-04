<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfiChamadaMoradorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofi_chamada_morador', function (Blueprint $table) {
            $table->integer('COD_OFICINA')->comment('Código da oficina');
            $table->date('DAT_INICIO')->comment('Data de início da oficina');
            $table->integer('COD_MORADOR')->comment('Código do morador');
            $table->date('DAT_MATRICULA')->comment('Data de matrícula do assistido na oficina. Viabiliza múltiplas oficinas.');
            $table->date('DAT_OFICINA')->comment('Data na qual a pessoa faltou à oficina');
            $table->smallInteger('IND_SITUACAO')->nullable()->comment('Indica se a pessoa estava Ausente(0); Presente(1); Justificou auseência(2);');
            $table->index(['COD_OFICINA', 'COD_MORADOR', 'DAT_OFICINA'], 'IDXOFI_CHAMADA_MORADOR_COD_OFICINA_COD_MORADOR_DAT_OFICINA');
            $table->primary(['COD_OFICINA', 'DAT_INICIO', 'COD_MORADOR', 'DAT_MATRICULA', 'DAT_OFICINA']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ofi_chamada_morador');
    }
}
