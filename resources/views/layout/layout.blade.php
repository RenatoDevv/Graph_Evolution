<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Graph Evolution @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Roboto:wght@100;300;400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://horizon-tailwind-react-corporate-7s21b54hb-horizon-ui.vercel.app/static/css/main.d7f96858.css" />
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="">
    <header class="header">
        <nav class="navigation">
            <div class="logo">
                <a href="{{ route('home') }}" class="text-decoration-none"><img src="{{ asset('img/logo.png') }}"
                        alt="" width="100%"></a>
            </div>
            <ul class="navigarion_ham " id="navigarion_hamb">
                <li><a href="{{ route('home') }}" class="navigation-links">Inicio</a></li>
                <li><a href="{{ route('services') }}" class="navigation-links">Servicios</a></li>
                <li><a href="{{ route('about') }}" class="navigation-links">Nosotros</a></li>
            </ul>
            <a href="{{ route('contact') }}" class="navigation-button">Contacto</a>
            <button type="button" class="responsive-button" id="responsive-button"><i class="bi bi-justify responsive-button"></i></button>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="footer" data-bs-theme="blue">
        <div class="footer-contanier">
            <div class="footer-container-box">
                <h2 class="footer-logo">Graph <br>Evolution</h2>
                <p class="footer-description">Lorem, ipsum dolor sit amet consectetur<br> adipisicing elit.
                    Voluptatibus, esse.</p>
            </div>
            <div class="footer-container-box">
                <p class="footer-title m-0">SERVICIOS</p>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Servicios</a></li>
                    <li><a href="">Nosotros</a></li>
                    <li><a href=""></a></li>
                </ul>
            </div>
            <div class="footer-container-box">
                <p class="footer-title m-0">EMPRESA</p>
                <ul>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href=""></a></li>
                </ul>
            </div>
            <div class="footer-container-box">
                <p class="footer-title m-0">CONTACTO</p>
                <ul class="d-flex gap-2">
                    <li><a href=""><i class="bi bi-phone-fill"></i></a></li>
                    <li><a href=""><i class="bi bi-facebook"></i></a></li>
                    <li><a href=""><i class="bi bi-envelope-at-fill"></i></a></li>
                </ul>
            </div>
        </div>
        <p class="copyrigth-text m-0 p-0">Copyright © 2023 Graph Evolution. todos los derechos reservados &copy;</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/home.js') }}"></script>
    @yield('scripts')
</body>

</html>
