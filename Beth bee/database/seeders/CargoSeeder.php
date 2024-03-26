<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cargos = [
        ['6', 'DEPUTADO FEDERAL'],
        ['7', 'DEPUTADO ESTADUAL'],
        ['3', 'GOVERNADOR'],
        ['5', 'SENADOR'],
        ['10', '2º SUPLENTE'],
        ['9', '1º SUPLENTE'],
        ['4', 'VICE-GOVERNADOR'],
        ['1', 'PRESIDENTE'],
        ['2', 'VICE-PRESIDENTE'],
    ];

    foreach($cargos as $cargo){
        DB::table('cargos')->insert([
            'cd_cargo' => $cargo[0],
            'ds_cargo'=>  $cargo[1],
        ]);
    }
    }
}
