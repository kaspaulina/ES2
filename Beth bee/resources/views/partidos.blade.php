@extends('adminlte::page')

@section('title', 'Partidos')

@section('content_header')
    <h1>Partidos</h1>
@stop

@section('content')
    <p>Busca por Partido</p>
    <div class="d-flex flex-wrap justify-content-around">
        @foreach($partidos as $partido)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">{{$partido->nm_partido}}</h5>
                    <p class="card-text">Número: {{$partido->nr_partido}}</p>
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
