<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $graus = [
            ['8', 'SUPERIOR COMPLETO'],
            ['6', 'ENSINO MÉDIO COMPLETO'],
            ['3', 'ENSINO FUNDAMENTAL INCOMPLETO'],
            ['7', 'SUPERIOR INCOMPLETO'],
            ['4', 'ENSINO FUNDAMENTAL COMPLETO'],
            ['5', 'ENSINO MÉDIO INCOMPLETO'],
            ['2', 'LÊ E ESCREVE'],
           // ['1', 'ANALFABETO'],
        ];

        foreach($graus as $grau){
            DB::table('graus')->insert([
                'cd_grau' => $grau[0],
                'ds_grau'=>  $grau[0],
            ]);
        }
    }
}
