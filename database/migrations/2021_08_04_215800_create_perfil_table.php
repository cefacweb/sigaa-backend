<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil', function (Blueprint $table) {
            $table->integer('COD_PERFIL')->primary()->comment('Código do perfil de utilização do sistema');
            $table->string('DSC_PERFIL', 25)->nullable()->comment('Descrição do perfil de utilização do sistema');
            $table->string('NOM_TESTEMUNHA1', 75)->nullable();
            $table->string('DSC_ENDERECO1', 100)->nullable();
            $table->integer('COD_CIDADE1')->nullable();
            $table->string('NUM_CPF1', 14)->nullable();
            $table->string('NOM_TESTEMUNHA2', 75)->nullable();
            $table->string('DSC_ENDERECO2', 100)->nullable();
            $table->integer('COD_CIDADE2')->nullable();
            $table->string('NUM_CPF2', 14)->nullable();
            $table->text('TXT_TERMO_ADESAO_VOLUNTARIO')->nullable();
            $table->text('TXT_TERMO_ADESAO_OFICINA')->nullable();
            $table->date('DAT_NATAL_LIMITE_MATRICULA')->nullable()->comment('Data limite para matrículas em oficinas do perfil, até a qual os oficineiros podem participar da campanha de natal.');
            $table->date('DAT_NATAL_MIN_DATA_LIMITE')->nullable()->comment('Data inicial de período no qual assistidos que recebem ranchos ou frequenta oficina com número de aulas definidas, neste perfil, tem direito a participar da campanha de natal.');
            $table->date('DAT_NATAL_MAX_DATA_LIMITE')->nullable()->comment('Data final de período no qual assistidos que recebem ranchos ou frequenta oficina com número de aulas definidas, neste perfil, tem direito a participar da campanha de natal.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfil');
    }
}
