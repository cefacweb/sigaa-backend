<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOficinaPessoaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oficina_pessoa', function (Blueprint $table) {
            $table->integer('COD_OFICINA')->comment('Código da oficina');
            $table->date('DAT_INICIO')->comment('Data do início da oficina');
            $table->integer('COD_PESSOA')->comment('Código da oficina');
            $table->date('DAT_MATRICULA')->comment('Data na qual a pessoa iniciou a oficina');
            $table->smallInteger('IND_OFICINA_SITUACAO')->nullable()->comment('Indica situação do assistido na oficina (0=em curso; 1=interrompido; 2=concluído; 3=transferido)');

            $table->primary(['COD_OFICINA', 'DAT_INICIO', 'COD_PESSOA', 'DAT_MATRICULA'],'PRIMARY');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oficina_pessoa');
    }
}
