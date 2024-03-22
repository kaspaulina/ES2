<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class VotacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $votacaos = [
            ['1', 'BRANCA'],
            ['5', 'INDÍGENA'],
            ['3', 'PARDA'],
            ['2', 'PRETA'],
            ['6', 'NÃO INFORMADO'],
            ['4', 'AMARELA'],
        ];

        foreach($votacaos as $votacao){
            DB::table('racas')->insert([
                'cd_cor_raca' => $votacao[0],
                'ds_cor_raca'=>  $votacao[0],
                qt_votos, nr_turno, cd_municipio, id_secao, id_candidato
            ]);
        }
    }
}
