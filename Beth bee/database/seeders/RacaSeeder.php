<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RacaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $racas = [
            ['1', 'BRANCA'],
            ['5', 'INDÍGENA'],
            ['3', 'PARDA'],
            ['2', 'PRETA'],
            ['6', 'NÃO INFORMADO'],
            ['4', 'AMARELA'],
        ];

        foreach($racas as $raca){
            DB::table('racas')->insert([
                'cd_cor_raca' => $raca[0],
                'ds_cor_raca'=>  $raca[0],
            ]);
        }
    }
}
