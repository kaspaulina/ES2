<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $municipios = [
            ['31054', 'ARACAJU'],
            ['31917', 'NOSSA SENHORA DAS DORES'],
            ['31690', 'LAGARTO'],
            ['32115', 'PORTO DA FOLHA'],
            ['31810', 'MOITA BONITA'],
            ['31771', 'MALHADOR'],
            ['31577', 'ITABAIANA'],
            ['31070', 'ARAUÁ'],
            ['31593', 'ITABAIANINHA'],
            ['31615', 'ITABI'],
            ['31950', 'NOSSA SENHORA DO SOCORRO'],
            ['32212', 'ROSÁRIO DO CATETE'],
            ['31232', 'CANINDÉ DE SÃO FRANCISCO'],
            ['31119', 'BARRA DOS COQUEIROS'],
            ['32190', 'RIBEIRÓPOLIS'],
            ['31275', 'CARIRA'],
            ['32239', 'SALGADO'],
            ['31259', 'CAPELA'],
            ['31410', 'ESTÂNCIA'],
            ['31798', 'MARUIM'],
            ['32417', 'SIMÃO DIAS'],
            ['32131', 'PROPRIÁ'],
            ['31674', 'JAPOATÃ'],
            ['32476', 'TOBIAS BARRETO'],
            ['32158', 'RIACHÃO DO DANTAS'],
            ['32093', 'POÇO VERDE'],
            ['31895', 'NOSSA SENHORA DA GLÓRIA'],
            ['32336', 'SÃO CRISTÓVÃO'],
            ['31453', 'FREI PAULO'],
            ['31550', 'INDIAROBA'],
            ['32514', 'UMBAÚBA'],
            ['32034', 'PINHÃO'],
            ['31003', 'SANTANA DO SÃO FRANCISCO'],
            ['32379', 'SÃO FRANCISCO'],
            ['31836', 'MONTE ALEGRE DE SERGIPE'],
            ['31151', 'BOQUIM'],
            ['32298', 'SANTA ROSA DE LIMA'],
            ['31038', 'AQUIDABÃ'],
            ['31194', 'CAMPO DO BRITO'],
            ['31976', 'PACATUBA'],
            ['32433', 'SIRIRI'],
            ['31372', 'CUMBE'],
            ['31712', 'LARANJEIRAS'],
            ['32018', 'PEDRINHAS'],
            ['32077', 'POÇO REDONDO'],
            ['31291', 'CARMÓPOLIS'],
            ['32255', 'SANTA LUZIA DO ITANHY'],
            ['31879', 'NEÓPOLIS'],
            ['31534', 'ILHA DAS FLORES'],
            ['32352', 'SÃO DOMINGOS'],
            ['31933', 'NOSSA SENHORA DE LOURDES'],
            ['31496', 'GARARU'],
            ['32492', 'TOMAR DO GERU'],
            ['31330', 'CRISTINÁPOLIS'],
            ['31631', 'ITAPORANGA D AJUDA'],
            ['31739', 'MACAMBIRA'],
            ['31518', 'GRACCHO CARDOSO'],
            ['31437', 'FEIRA NOVA'],
            ['32050', 'PIRAMBU'],
            ['31356', 'NOSSA SENHORA APARECIDA'],
            ['31097', 'AREIA BRANCA'],
            ['32310', 'SANTO AMARO DAS BROTAS'],
            ['31658', 'JAPARATUBA'],
            ['31399', 'DIVINA PASTORA'],
            ['31216', 'CANHOBA'],
            ['31313', 'CEDRO DE SÃO JOÃO'],
            ['31852', 'MURIBECA'],
            ['32174', 'RIACHUELO'],
            ['32395', 'SÃO MIGUEL DO ALEIXO'],
            ['31135', 'BREJO GRANDE'],
            ['31011', 'AMPARO DE SÃO FRANCISCO'],
            ['31470', 'GENERAL MAYNARD'],
            ['31755', 'MALHADA DOS BOIS'],
            ['31992', 'PEDRA MOLE'],
            ['32450', 'TELHA'],
        ];

        foreach($municipios as $municipio){
            DB::table('municipios')->insert([
                'cd_mun' => $municipio[0],
                'ds_mun'=>  $municipio[0],
            ]);
        }
    }
}
