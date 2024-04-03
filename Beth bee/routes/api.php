<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Entities\Candidato;

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

use Dompdf\Dompdf;
Route::get('/candidatos/pdf', function () {
    $candidates = Candidato::all();

    generatePdfFromJson($candidates);

    return response()->json(['message' => 'PDF gerado com sucesso'], 200);
});


function generatePdfFromJson($json_data) {
    // Convert JSON to an array
    $candidates = json_decode($json_data, true);
    // Ordenar os candidatos por idade de posse
    usort($candidates, function($a, $b) {
        return $a['nr_idade_data_posse'] - $b['nr_idade_data_posse'];
    });

    $candidates = array_filter($candidates, function($candidate) {
        return $candidate['eleito'] == 1;
    });


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
                     <thead>
                         <tr>
                             <th>ID</th>
                             <th>Nome</th>
                             <th>Partido</th>
                             <th>Idade de Posse</th>
                             <th>Eleito</th>
                             <!-- Add more table headers as needed -->
                         </tr>
                     </thead>
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
