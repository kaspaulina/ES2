@extends('adminlte::page')

@section('title', 'Candidatos')

@section('content_header')
    <h1>Candidatos</h1>
@stop

@section('content')
    <p>Busca por Candidato</p>
    <div class="d-flex flex-wrap justify-content-around">
        @foreach($candidatos as $candidato)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">{{$candidato->nm_candidato}}</h5>
                    <p class="card-text">Número: {{$candidato->nr_candidato}}</p>
                    <a href="#" class="btn btn-warning">Ver Mais</a>
                </div>
            </div>
        @endforeach
    </div>
@stop

@section('css')

@stop

@section('js')

@stop
