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
                <img src="{{asset('images/candidato-placeholder.avif')}}" class="card-img-top" alt="Foto do Candidato">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">{{$candidato->nm_candidato}}</h5>
                    <p class="card-text">Número: {{$candidato->nr_candidato}}</p>
                    {{-- <p class="card-text">Partido: {{$candidato->nr_partido}}</p> --}}
                    {{-- <p class="card-text">Cargo: {{$candidato->cargoRelationship}}</p> --}}
                    <a href="#" class="btn btn-primary">Ver Mais</a>
                </div>
            </div>
        @endforeach
    </div>
@stop

@section('css')

@stop

@section('js')

@stop
