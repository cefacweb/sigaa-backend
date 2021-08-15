<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntidadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidade', function (Blueprint $table) {
            $table->integer('COD_ENTIDADE')->primary()->comment('Código da Entidade');
            $table->string('NOM_ENTIDADE', 100)->nullable()->comment('Nome da Entidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entidade');
    }
}
