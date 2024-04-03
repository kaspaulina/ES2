@extends('adminlte::page')

@section('title', 'Pesquisa Simples')

@section('content_header')
    <h1>Informações</h1>
@stop

@section('content')
    <canvas id="escolaridadeGrafico" style="max-height: 75vh"></canvas>
@stop

@section('css')

@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('escolaridadeGrafico').getContext('2d');
    var cores = ['rgba(255, 99, 132, 0.6)', 'rgba(54, 162, 235, 0.6)', 'rgba(255, 206, 86, 0.6)', 'rgba(75, 192, 192, 0.6)', 'rgba(153, 102, 255, 0.6)', 'rgba(255, 159, 64, 0.6)', 'rgba(128, 128, 128, 0.6)'];
    var escolaridadeGrafico = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: {!! json_encode(array_keys($contagemGraus)) !!},
            datasets: [{
                data: {!! json_encode(array_values($contagemGraus)) !!},
                backgroundColor: cores,
                borderColor: cores.map(c => c.replace('0.6', '1')),
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'Número de candidatos, para cada grau de escolaridade',
                    font: {
                        size: 20
                    }
                }
            }
        }
    });
</script>
@stop
