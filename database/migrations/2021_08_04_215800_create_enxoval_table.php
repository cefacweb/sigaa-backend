<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnxovalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enxoval', function (Blueprint $table) {
            $table->integer('COD_PESSOA')->comment('Código da pessoa');
            $table->date('DAT_REGISTRO_GESTACAO')->comment('Data de registro da gestação');
            $table->date('DAT_AGENDA')->comment('Data do agendamento');
            $table->integer('COD_AGENDADOR')->comment('Código do trabalhador que fez o agendamento');
            $table->date('DAT_ENTREGA')->nullable()->comment('Data de entrega do enxoval');
            $table->integer('COD_ENTREGADOR')->nullable()->comment('Código do trabalhador que fez a entrega');
            $table->smallInteger('IND_PARCIAL')->nullable()->comment('Indica se foi entregue somente a primeira parte do enxoval (1) ou o enxoval completo (0).');

            $table->primary(['COD_PESSOA', 'DAT_REGISTRO_GESTACAO', 'DAT_AGENDA'],'PRIMARY');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enxoval');
    }
}
