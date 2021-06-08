<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- css da aplicação -->

    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/scripts.js"></script>


</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/images/logoajudai.png" alt="Ajudai Tamo Junto"> </a>
                    <ul class="navbar-nav">
                        <li class="nav-item"></li>
                        <a href="/" class="nav-link">Eventos</a>
                        <li class="nav-item"></li>
                        <a href="/" class="nav-link">Doar</a>
                        <li class="nav-item"></li>
                        <a href="/" class="nav-link">Entrar</a>
                        <li class="nav-item"></li>
                        <a href="/" class="nav-link">Cadastrar</a>
                    </ul>
            </div>
        </nav>
    </header>
    @yield('content')

    <footer>
        <p>HDC Events &copy; 2021</p>
    </footer>
</body>

</html>
