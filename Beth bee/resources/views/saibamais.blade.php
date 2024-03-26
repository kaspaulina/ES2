@extends('adminlte::page')

@section('title', 'Saiba Mais')

@section('content_header')
    @stop

    @section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2, h3 {
            color: #FFCC00;
        }
        ul {
            list-style-type: none;
            padding-left: 0;
        }
        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div >
        <h2>Bem-vindo à página "Saiba Mais" do BETH BEE!</h2>
        <div>
            <p>Este projeto visa fornecer uma plataforma acessível e informativa para os cidadãos de Sergipe e além, permitindo-lhes explorar e compreender melhor os resultados eleitorais desta importante eleição.</p>

            <h3>Objetivo do Projeto:</h3>
            <p>Nosso principal objetivo é facilitar o acesso e compreensão dos dados eleitorais de 2022, concentrando-nos nos resultados das eleições em Sergipe. Queremos fornecer uma experiência didática e enriquecedora, apresentando informações claras e detalhadas sobre os votos para Presidente e Senador, bem como insights relevantes sobre as tendências eleitorais em diferentes regiões do estado.</p>

            <h3>O Que Esperar:</h3>
            <ul>
                <li>Dashboard Interativo: Explore um dashboard interativo que exibe os resultados eleitorais de Sergipe em 2022, com gráficos claros e divisões por cargos para uma compreensão fácil e rápida.</li>
                <li>Filtros por Região: Selecione regiões específicas, como municípios, para visualizar dados mais detalhados e obter insights relevantes sobre as eleições em diferentes áreas do estado.</li>
                <li>Informações Textuais e Insights: Descubra informações textuais detalhadas e insights sobre os resultados eleitorais em Sergipe, ajudando a contextualizar e compreender melhor os dados apresentados.</li>
                <li>Comparação com Outros Estados: Compare os resultados eleitorais de Sergipe com outros estados do Brasil para uma visão mais abrangente e comparativa.</li>
                <li>Visualização dos Candidatos: Explore e compare os perfis dos candidatos com a funcionalidade do dashboard.</li>
                <li>Gerenciamento de Dados: Tenha acesso e controle sobre os dados dos candidatos, permitindo uma gestão eficiente e organizada das informações apresentadas.</li>
            </ul>

            <h3>Nosso Compromisso:</h3>
            <p>Fornecemos um site responsivo e intuitivo, garantindo uma experiência consistente e acessível para todos os usuários, independentemente do dispositivo ou navegador utilizado.</p>
            <p>Estamos empolgados em compartilhar este projeto com você e esperamos que ele se torne uma fonte valiosa de informação e análise para todos os interessados nas eleições de 2022 em Sergipe. Explore e descubra mais sobre os resultados eleitorais e tendências do nosso estado!</p>
        </div>
    </div>
</body>
    @stop

@section('css')

@stop

@section('js')

@stop
