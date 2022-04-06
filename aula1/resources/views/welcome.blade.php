<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
       
    </head>
    <body>
       <h1>edson</h1>
       <img src="/img/banner.jpg" alt="Banner">
       @if(10 > 5)
       <p>A condicao e true</p>
       @endif

       <p>{{ $nome}}</P>

       @if($nome == "Pedro")
       <p>O nome e Pedro</p>
       @elseif ($nome == "Edson")
       <p>O nome e {{ $nome}} e ele tem {{ $idade}} anos ele trabalha como {{ $profissao}}</p>
       @else
       <p>O nome nao e pedro</p>
       @endif

       @for($i = 0; $i < count($arr); $i++)
       <p>{{ $arr[$i]}} - {{ $i}}</p>
       @if($i == 2)
       <p>o i e 2 </p>
       @endif
       @endfor

       @foreach($nomes as $nome)
       <p>{{ $nome}}</p>
       @endforeach
    </body>
</html>
