<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votacaos', function (Blueprint $table) {
            $table->id();
            $table->integer("cd_votacao")->unique();
            $table->integer('qt_votos');
            $table->integer('nr_turno');
            $table->foreignId('cd_mun')->constrained('municipios');
            $table->foreignId('id_secao')->constrained('secaos');
            $table->foreignId('id_candidato')->constrained('candidatos');
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
        Schema::dropIfExists('votos');
    }
}
