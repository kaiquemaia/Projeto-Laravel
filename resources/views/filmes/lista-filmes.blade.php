<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <h2 class="text-center">Lista de Filmes</h2>
    <table class="table container py-5 mt-5">
    <thead>
        <tr>
        <th scope="col">Títudo</th>
        <th scope="col">Sinopse</th>
        <th scope="col">Duração</th>
        <th scope="col">Imagem</th>
        <th scope="col">Data de lançamento</th>
        
        </tr>
    </thead>
        <tbody>
            @foreach ($filmes as $filmes)
                <tr>
                    <th scope="row">{{$filmes->titulo}}</th>
                    <td>{{$filmes->sinopse}}</td>
                    <td>{{$filmes->duracao}}</td>
                    <td>{{$filmes->imagem}}</td>
                    <td>{{$filmes->data_lancamento}}</td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
    
</body>
</html>