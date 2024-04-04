@extends('adminlte::page')

@section('title', 'Candidatos')

@section('content_header')
    <h1>Candidatos</h1>
@stop

@section('content')
    <p>Busca por Candidato</p>

    <script>
        var apiUrl = 'http://127.0.0.1:8000/api/candidatos';
        var candidatos;

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                candidatos = data;
                console.log(candidatos);

                var container = document.querySelector('.d-flex.flex-wrap.justify-content-around');
                candidatos.forEach(candidato => {
                    var card = `
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">${candidato.nm_candidato}</h5>
                                <p class="card-text">Número: ${candidato.nr_candidato}</p>
                                <a href="#" class="btn btn-warning">Ver Mais</a>
                            </div>
                        </div>
                    `;
                    container.innerHTML += card;
                });
            })
            .catch(error => {
                console.error('Error:', error);
            });
    </script>

    <div class="d-flex flex-wrap justify-content-around">
        <!-- Os cards serão inseridos aqui pelo JavaScript -->
    </div>
@stop

@section('css')

@stop

@section('js')

@stop
