<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntidadeProgramaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidade_programa', function (Blueprint $table) {
            $table->integer('COD_ENTIDADE');
            $table->integer('COD_PROGRAMA');
            $table->string('NOM_PROGRAMA', 100)->nullable();
            $table->text('DSC_PROGRAMA')->nullable();

            $table->primary(['COD_ENTIDADE', 'COD_PROGRAMA'],'PRIMARY');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entidade_programa');
    }
}
