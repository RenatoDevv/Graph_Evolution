<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/404.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
</head>

<body>
    <div class="container_404">
        <div style="width:70%;">
            <img src="{{ asset('img/404/icon_404_graph_evolution.png') }}" class="image_404" alt="Imagen de pagina no encontrada"
                width="100%">
        </div>
        <div class="container_404_info">
            <div class="title_404">
                @yield('code')
            </div>
            <h1>@yield('message')</h1>
            <div>
                <a href="{{ route('home')}}" class="link_404">Llevame al Inicio</a>
            </div>
        </div>
    </div>
</body>

</html>
