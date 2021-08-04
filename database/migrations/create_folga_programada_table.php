<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFolgaProgramadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folga_programada', function (Blueprint $table) {
            $table->integer('COD_OFICINA')->comment('Código da oficina que terá folga');
            $table->date('DAT_INICIO')->comment('Data de início do período de folga');
            $table->date('DAT_TERMINO')->comment('Data de término do período de folga');
            $table->smallInteger('IND_RANCHO')->default(0)->comment('Ranchos programados para esta data?
(0;Manter;1;Adiar;2;Antecipar;3;Distribuir)');
            $table->string('DSC_FOLGA', 50)->comment('Descrição da folga programada');
            $table->unique(['COD_OFICINA', 'DAT_INICIO', 'DAT_TERMINO'], 'IDXFOLGA_PROGRAMADA_COD_OFICINA_DAT_INICIO_DAT_TERMINO');
            $table->primary(['COD_OFICINA', 'DAT_INICIO', 'DAT_TERMINO']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('folga_programada');
    }
}
