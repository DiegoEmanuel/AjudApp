<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/scripts.js"></script>


</head>

<body class="antialiased">
    <h1> Alguma coisa </h1>
    <img src="/images/logoajudai.png" alt="banner"/>
    @if (10 > 9)
        <p>A condição é true</p>

    @endif
    <p>O nome é {{ $nome }}

    @for ($i=0;$i < count($arr); $i++)
        <p>{{$arr[$i]}} - {{$i}} </p>
    @endfor
</body>

</html>
