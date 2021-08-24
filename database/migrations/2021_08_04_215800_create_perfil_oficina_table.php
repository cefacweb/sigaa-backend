<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilOficinaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_oficina', function (Blueprint $table) {
            $table->integer('COD_PERFIL')->comment('Código do Perfil');
            $table->integer('COD_OFICINA')->comment('Código da Oficina');

            $table->primary(['COD_PERFIL', 'COD_OFICINA'],'PRIMARY');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfil_oficina');
    }
}
