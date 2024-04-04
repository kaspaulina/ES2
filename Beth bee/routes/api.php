<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Entities\Candidato;
use App\Models\Entities\Votacao;
use App\Models\Entities\Municipio;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/candidatos', function () {
    $candidates = Candidato::all();
    $res = $candidates;
    return response()->json($res);
});


Route::get('/votos/{idMunicipio}', function ($idMunicipio) {
    // Encontre os votos associados ao município com o ID fornecido
    $votos = Votacao::where('cd_municipio', $idMunicipio)->get();
    // Retorna os votos como resposta JSON
    return response()->json($votos);
});

Route::get('/votos/{idMunicipio}/pdf', function ($idMunicipio) {
    // Encontre os votos associados ao município com o ID fornecido
    $votos     = Votacao::where('cd_municipio', $idMunicipio)->get();
    $municipio = Municipio::where('cd_mun', $idMunicipio)->first();
    // $municipio = $votos->first()->getMunicipioAttribute();

    $result = generateVotesPdfFromJson($votos, $municipio);

    return response()->json(['message' => 'PDF gerado com sucesso'], 200);
});

Route::get('/municipios', function () {
    $res = Municipio::all();
    return response()->json($res);
});


use Dompdf\Dompdf;
Route::get('/candidatos/pdf', function () {
    $candidates = Candidato::all();
    generateCandidatePdfFromJson($candidates);
    return response()->json(['message' => 'PDF gerado com sucesso'], 200);
});


function generateCandidatePdfFromJson($json_data) {
    // Convert JSON to an array
    $candidates = json_decode($json_data, true);
    // Ordenar os candidatos por idade de posse
    usort($candidates, function($a, $b) {
        return $a['nr_idade_data_posse'] - $b['nr_idade_data_posse'];
    });

    $candidates = array_filter($candidates, function($candidate) {
        return $candidate['eleito'] == 1;
    });

    $header = '<tr>
                 <th>ID</th>
                 <th>Nome</th>
                 <th>Partido</th>
                 <th>Idade de Posse</th>
                 <th>Eleito</th>
                 <!-- Add more table headers as needed -->
             </tr>';

    // Generate HTML content dynamically
    $html = '<!DOCTYPE html>
             <html lang="en">
             <head>
                 <meta charset="UTF-8">
                 <meta name="viewport" content="width=device-width, initial-scale=1.0">
                 <title>Candidates PDF</title>
             </head>
             <body>
                 <h1>Lista de Candidatos Eleitos, ordenado por Idade de Posse</h1>
                 <table border="1">
                     <thead>'
                        . $header.
                     '</thead>
                     <tbody>';

    foreach ($candidates as $candidate) {
        $eleito = $candidate['eleito'] == 1 ? 'Sim' : 'Não';
        $html .= '<tr>
                      <td>' . $candidate['id_candidato'] . '</td>
                      <td>' . $candidate['nm_candidato'] . '</td>
                      <td>' . $candidate['nr_partido'] . '</td>
                      <td>' . $candidate['nr_idade_data_posse'] . '</td>
                      <td>' . $eleito . '</td>
                      <!-- More rows goes here -->
                  </tr>';
    }

    $html .= '</tbody></table></body></html>';

    // Create PDF
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    // Output PDF
    return $dompdf->stream('candidates.pdf');
}

function generateVotesPdfFromJson($votos_json, $municipio) {
    // Convert JSON to arrays
    $votos = json_decode($votos_json, true);

    // Extrair o nome do município
    $nomeMunicipio = $municipio['nm_mun'];

    // Gerar cabeçalho da tabela
    $header = '<tr>
                 <th>ID Votação</th>
                 <th>Quantidade de Votos</th>
                 <th>Número do Turno</th>
                 <th>Seção</th>
                 <th>ID do Candidato</th>
                 <!-- Adicione mais cabeçalhos da tabela conforme necessário -->
             </tr>';

    // Gerar conteúdo HTML dinamicamente
    $html = '<!DOCTYPE html>
             <html lang="en">
             <head>
                 <meta charset="UTF-8">
                 <meta name="viewport" content="width=device-width, initial-scale=1.0">
                 <title>Votos do Município: ' . $nomeMunicipio . '</title>
             </head>
             <body>
                 <h1>Votos do Município: ' . $nomeMunicipio . '</h1>
                 <table border="1">
                     <thead>'
                        . $header .
                     '</thead>
                     <tbody>';

    // Preencher a tabela com os votos
    foreach ($votos as $voto) {
        $html .= '<tr>
                      <td>' . $voto['id_votacao'] . '</td>
                      <td>' . $voto['qt_votos'] . '</td>
                      <td>' . $voto['nr_turno'] . '</td>
                      <td>' . $voto['id_secao'] . '</td>
                      <td>' . $voto['id_candidato'] . '</td>
                      <!-- Mais linhas da tabela vão aqui -->
                  </tr>';
    }

    $html .= '</tbody></table></body></html>';

    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    $pdfFileName = 'votos_' . str_replace(' ', '_', strtolower($nomeMunicipio)) . '.pdf';

    return $dompdf->stream($pdfFileName);
}

