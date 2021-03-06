<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunoTurmaPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_turma', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('aluno_id')->unsigned()->index();
            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');

            $table->integer('turma_id')->unsigned()->index();
            $table->foreign('turma_id')->references('id')->on('turmas')->onDelete('cascade');

           
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
        Schema::dropIfExists('aluno_turma');
    }
}
