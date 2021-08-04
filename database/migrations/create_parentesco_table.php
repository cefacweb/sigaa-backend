<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentescoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parentesco', function (Blueprint $table) {
            $table->integer('COD_PARENTESCO')->primary()->comment('Código do parentesco');
            $table->string('DSC_PARENTESCO', 20)->comment('Descrição do parentesco');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parentesco');
    }
}
