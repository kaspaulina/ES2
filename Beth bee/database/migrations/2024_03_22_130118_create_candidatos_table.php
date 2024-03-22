<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->integer("id_candidato")->primary();
            $table->integer('nr_candidato');
            $table->string('nm_candidato');
            $table->boolean('eleito');
            $table->integer('nr_idade_data_posse');
            $table->foreignId('nr_partido')->constrained('partidos');
            $table->foreignId('cd_cargo')->constrained('cargos');
            $table->foreignId('cd_genero')->constrained('generos');
            $table->foreignId('cd_grau')->constrained('graus');
            $table->foreignId('cd_cor_raca')->constrained('racas');
            $table->foreignId('cd_votacao')->constrained('votacaos');
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
        Schema::dropIfExists('candidato');
    }
}
