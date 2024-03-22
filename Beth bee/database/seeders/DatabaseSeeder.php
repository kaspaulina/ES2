<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(array(
            CandidatoSeeder::class,
            CargoSeeder::class,
            GeneroSeeder::class,
            GrauSeeder::class,
            MunicipioSeeder::class,
            PartidoSeeder::class,
            RacaSeeder::class,
            SecaoSeeder::class,
            VotacaoSeeder::class,

        ));
        // \App\Models\User::factory(10)->create();
    }
}
