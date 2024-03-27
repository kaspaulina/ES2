<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generos = [
            ['2', 'MASCULINO'],
            ['4', 'FEMININO'],
        ];

        foreach($generos as $genero){
            DB::table('generos')->insert([
                'cd_genero' => $genero[0],
                'ds_genero'=>  $genero[0],
            ]);
        }

        }
}
