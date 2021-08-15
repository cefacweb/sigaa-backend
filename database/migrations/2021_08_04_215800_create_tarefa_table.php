<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarefaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefa', function (Blueprint $table) {
            $table->smallInteger('COD_TAREFA')->primary();
            $table->string('DSC_TAREFA', 50);
            $table->smallInteger('IND_COORDENACAO')->nullable()->comment('Define se é uma tarefa Diversa(0) ou de de Coordenação(1).');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarefa');
    }
}
