<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListaEsperaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_espera', function (Blueprint $table) {
            $table->smallInteger('IND_BENEFICIO')->comment('Indicador do benefício a receber: 0=Dentista; 1=Oftalmologista; 2=Médico; 3=Ótica; 4=Oficina');
            $table->integer('COD_PESSOA')->comment('Código da pessoa que entrou na lista');
            $table->date('DAT_ENTRADA')->comment('Data na qual a pessoa entrou na lista');
            $table->integer('COD_ATENDENTE')->nullable()->comment('Código do atendente que incluiu a pessoa na lista');
            $table->integer('COD_PERFIL')->nullable()->comment('Código do perfil no qual a pessoa será atendida');
            $table->smallInteger('NUM_ORDEM')->comment('Ordem de entrada da pessoa na lista');
            $table->string('DSC_OBSERVACAO')->nullable();
            $table->smallInteger('IND_SITUACAO')->nullable();
            $table->unique(['IND_BENEFICIO', 'COD_PESSOA', 'DAT_ENTRADA'], 'IDXLISTA_ESPERA_IND_BENEFICIO_COD_PESSOA_DAT_ENTRADA');
            $table->primary(['IND_BENEFICIO', 'COD_PESSOA', 'DAT_ENTRADA']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lista_espera');
    }
}
