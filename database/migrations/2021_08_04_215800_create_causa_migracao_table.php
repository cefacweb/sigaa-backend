<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCausaMigracaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('causa_migracao', function (Blueprint $table) {
            $table->integer('COD_CAUSA_MIGRACAO')->primary()->comment('Código da causa da migração');
            $table->string('DSC_CAUSA_MIGRACAO', 50)->comment('Descrição da causa da migração');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('causa_migracao');
    }
}
