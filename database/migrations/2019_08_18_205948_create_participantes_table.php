<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participante', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idEvento');
            $table->bigInteger('idAluno');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('idEvento')->references('id')->on('evento');
            $table->foreign('idAluno')->references('id')->on('aluno');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participante');
    }
}
