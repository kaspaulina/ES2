@extends('adminlte::page')

@section('title', 'Municípios')

@section('content_header')
    <h1>Municípios</h1>
@stop

@section('content')
    <p>Busca por Município</p>
    <div class="d-flex flex-wrap justify-content-around">
        @foreach($municipios as $municipio)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">{{$municipio->nm_mun}}</h5>
                    <p class="card-text">Código: {{$municipio->cd_mun}}</p>
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
