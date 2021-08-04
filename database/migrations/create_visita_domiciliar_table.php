<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitaDomiciliarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visita_domiciliar', function (Blueprint $table) {
            $table->integer('COD_PESSOA')->comment('Código da pessoa');
            $table->date('DAT_VISITA')->comment('Data da visita');
            $table->smallInteger('COD_VISITANTE1')->comment('Visitante 1');
            $table->smallInteger('COD_VISITANTE2')->nullable()->comment('Visitante 2');
            $table->smallInteger('IND_PARECER')->nullable()->comment('Periodicidade da entrega de rancho (nulo; Pendente;0;Desfavorável;1;Favorável)');
            $table->smallInteger('IND_DURACAO_BENEFICIO')->nullable()->default(3)->comment('Duração (1;"1 mês";2;"2 meses";3;"3 meses";)');
            $table->integer('IND_PERIODO')->nullable()->default(1)->comment('Períodicidade (0;Quinzenal;1;Mensal)');
            $table->date('DAT_PRIMEIRA_ENTREGA')->nullable()->comment('Data da primeira entrega');
            $table->date('DAT_ULTIMA_ENTREGA')->nullable()->comment('Data da última entrega');
            $table->integer('COD_RESPONSAVEL_PARECER')->comment('Responsável pelo parecer Favorável ou Desfavorável');
            $table->unique(['COD_PESSOA', 'DAT_VISITA'], 'IDXVISITA_DOMICILIAR_COD_PESSOA_DAT_VISITA');
            $table->primary(['COD_PESSOA', 'DAT_VISITA']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visita_domiciliar');
    }
}
