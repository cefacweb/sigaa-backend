<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoParceriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_parceria', function (Blueprint $table) {
            $table->integer('COD_TIPO_PARCERIA')->primary()->comment('Código do tipo de parceria');
            $table->string('DSC_TIPO_PARCERIA', 100);
            $table->smallInteger('IND_BENEFICIO')->comment('Indicador do benefício oferecido: 0=Dentista; 1=Oftalmologista; 2=Médico; 3=Ótica; 4=Oficina');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_parceria');
    }
}
