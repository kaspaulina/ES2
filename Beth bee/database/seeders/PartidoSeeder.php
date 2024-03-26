<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partidos = [
        ['23', 'CIDADANIA', 'CIDADANIA'],
        ['13', 'PT', 'PARTIDO DOS TRABALHADORES'],
        ['19', 'PODE', 'PODEMOS'],
        ['55', 'PSD', 'PARTIDO SOCIAL DEMOCRÁTICO'],
        ['65', 'PC do B', 'PARTIDO COMUNISTA DO BRASIL'],
        ['90', 'PROS', 'PARTIDO REPUBLICANO DA ORDEM SOCIAL'],
        ['22', 'PL', 'PARTIDO LIBERAL'],
        ['44', 'UNIÃO', 'UNIÃO BRASIL'],
        ['27', 'DC', 'DEMOCRACIA CRISTÃ'],
        ['50', 'PSOL', 'PARTIDO SOCIALISMO E LIBERDADE'],
        ['16', 'PSTU', 'PARTIDO SOCIALISTA DOS TRABALHADORES UNIFICADO'],
        ['51', 'PATRIOTA', 'PATRIOTA'],
        ['14', 'PTB', 'PARTIDO TRABALHISTA BRASILEIRO'],
        ['12', 'PDT', 'PARTIDO DEMOCRÁTICO TRABALHISTA'],
        ['11', 'PP', 'PROGRESSISTAS'],
        ['10', 'REPUBLICANOS', 'REPUBLICANOS'],
        ['40', 'PSB', 'PARTIDO SOCIALISTA BRASILEIRO'],
        ['43', 'PV', 'PARTIDO VERDE'],
        ['80', 'UP', 'UNIDADE POPULAR'],
        ['77', 'SOLIDARIEDADE', 'SOLIDARIEDADE'],
        ['45', 'PSDB', 'PARTIDO DA SOCIAL DEMOCRACIA BRASILEIRA'],
        ['33', 'PMN', 'PARTIDO DA MOBILIZAÇÃO NACIONAL'],
        ['15', 'MDB', 'MOVIMENTO DEMOCRÁTICO BRASILEIRO'],
        ['29', 'PCO', 'PARTIDO DA CAUSA OPERÁRIA'],
        ['18', 'REDE', 'REDE SUSTENTABILIDADE'],
        ['21', 'PCB', 'PARTIDO COMUNISTA BRASILEIRO'],
        ['30', 'NOVO', 'PARTIDO NOVO'],
        ['0', 'NULO', 'BRANCO NULO'],
    ];

    foreach($partidos as $partido){
        DB::table('partidos')->insert([
            'nr_partido' => $partido[0],
            'sg_partido'=>  $partido[1],
            'nm_partido'=>  $partido[2],
        ]);
    }
    }
}
