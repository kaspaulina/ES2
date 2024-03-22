<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LandingPage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: Georgia, serif;
        }
    </style>
</head>

<body>
    <div class="flex items-center justify-evenly" style="height: 96vh;">
        <div style="max-width: 40vw;">
            <div class="flex items-center">
                <h1 class="font-black text-9xl">BETH<br><span class="text-xl italic">(boletim eleitoral transparente
                        hoje)</span><br>BEE</h1>
                <img style="height: 191px; width: 191px; margin-left: 3rem" src="{{asset('images/beth-bee-logo.png')}}" alt="Beth Bee logo">
            </div>
            <h4 class="text-lg">O BETH BEE é um portal que apresenta de forma simples e didática, informações e insights
                sobre os
                resultados da última eleição presidencial, com base nos dados do estado de Sergipe.</h4>
            <div class="mt-16">
                <a href="{{route('pesquisasimples')}}">
                    <button type="button"
                        class="text-yellow-300 bg-gradient-to-r from-zinc-500 via-zinc-600 to-zinc-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-zinc-300  font-medium rounded-lg text-lg px-5 py-2.5 text-center me-2 mb-2">Pesquisa Simples</button>
                </a>
                <a href="{{route('candidatos')}}">
                    <button type="button"
                    class="text-yellow-300 bg-gradient-to-r from-zinc-500 via-zinc-600 to-zinc-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-zinc-300  font-medium rounded-lg text-lg px-5 py-2.5 text-center me-2 mb-2">Informações</button>
                </a>
                <a href="{{route('insights')}}">
                    <button type="button"
                    class="text-yellow-300 bg-gradient-to-r from-zinc-500 via-zinc-600 to-zinc-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-zinc-300  font-medium rounded-lg text-lg px-5 py-2.5 text-center me-2 mb-2">Insights</button>
                </a>
                <a href="{{route('saibamais')}}">
                    <button type="button"
                        class="text-yellow-300 bg-gradient-to-r from-zinc-500 via-zinc-600 to-zinc-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-zinc-300  font-medium rounded-lg text-lg px-5 py-2.5 text-center me-2 mb-2">Saiba Mais</button>
                </a>
            </div>
        </div>
        <div>
            <img src="{{asset('images/beth-bee3.jpg')}}" alt="beth"
                style="max-height: 75vh;">
        </div>
    </div>
</body>
<footer class="min-h-[4%] bg-gradient-to-br from-yellow-300 to-yellow-500 flex items-center justify-center w-full">
    <span class="text-md text-black">© 2023&nbsp;<a href="https://rodrigoos.me/" class="hover:underline">Beth Bee</a>. All Rights Reserved.</span>
</footer>

</html>
