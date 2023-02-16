<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimentacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('conta_id');
            $table->unsignedBigInteger('pessoa_id');
            $table->float('valor');
            $table->boolean('depositar_retirar');
            $table->foreign('pessoa_id')->references('id')->on('pessoas');
            $table->foreign('conta_id')->references('id')->on('contas');
            
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimentacoes');
    }
};
