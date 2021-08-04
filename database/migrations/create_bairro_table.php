<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBairroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bairro', function (Blueprint $table) {
            $table->integer('COD_BAIRRO')->primary()->comment('Código do bairro');
            $table->string('NOM_BAIRRO', 50)->nullable()->index('IDXBAIRRO_NOM_BAIRRO')->comment('Nome do bairro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bairro');
    }
}
