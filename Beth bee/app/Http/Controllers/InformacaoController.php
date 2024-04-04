<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entities\Candidato;
use App\Models\Entities\Grau;

class InformacaoController extends Controller
{
    public function escolaridade()
    {
        $graus = Grau::pluck('ds_grau')->toArray();

        $contagemGraus = [];
        foreach ($graus as $grau) {
            $contagemGraus[$grau] = Candidato::whereHas('grauRelationship', function ($query) use ($grau) {
                $query->where('ds_grau', $grau);
            })->count();
        }

        return view('informacoes', ['contagemGraus' => $contagemGraus]);
    }
}
