<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Graph Evolution - @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://horizon-tailwind-react-corporate-7s21b54hb-horizon-ui.vercel.app/static/css/main.d7f96858.css" />
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="mx-auto">
    <div class="notify_events">
        <p class="mesage_events">🎄🤶 ❄️🤶🎄</p>
    </div>
    <header class="header content">
            <a class="logo" href="{{ route('home') }}" class="text-decoration-none"><img
                  class="logo_img"  src="{{ asset('img/logo.png') }}" alt="" width="100%"></a>
        <nav class="navigation">
            <button class="close_nav" style="border: none; background: transparent">
                <i class="bi bi-x-lg"></i>
            </button>
            <ul class="navigarion_ham ">
                <li><a href="{{ route('home') }}" class="navigation-links">Inicio</a></li>
                <li><a href="{{ route('services') }}" class="navigation-links">Servicios</a></li>
                <li><a href="{{ route('about') }}" class="navigation-links">Nosotros</a></li>
                <li><a href="{{ route('help') }}" class="navigation-links">Soporte</a></li>
                <li><a href="{{ route('contact') }}" class="navigation-links contact-button">Contacto</a></li>
            </ul>
            <div>

                <a href="{{ route('contact') }}"
                    class="section-button inline-flex justify-center items-center text-white rounded-lg bg-[#cf0068] hover:bg-[#cf0068d8] button-desk">
                    Contacto
                </a>
            </div>
        </nav>
        <button class="open_navbar"><i class="bi bi-list"></i></button>
    </header>
    <main class="mx-auto grid content-center justify-center items-center">
        @yield('content')
    </main>
    <footer class="footer content bg-[#0c0a11]" data-bs-theme="blue">
        <div class="footer-contanier">
            <div class="footer-container-box">
                <div>
                    <a href=""><img src="{{ asset('img/logo.png') }}" alt="" width=100></a>
                </div>
                {{-- <h2 class="footer-logo font-bold">Graph <br>Evolution</h2> --}}
                <p class="footer-description">Transformando ideas.</p>
            </div>
            <div class="footer-container-box">
                <p class="footer-title m-0">Servicios</p>
                <ul>
                    <li><a href="{{ route('services') }}">Diseño Logo</a></li>
                    <li><a href="{{ route('services') }}">Banner</a></li>
                    <li><a href="{{ route('services') }}">Volantes</a></li>
                </ul>
            </div>
            <div class="footer-container-box">
                <p class="footer-title m-0">Empresa</p>
                <ul>
                    <li><a href="{{ route('about') }}">Nosotros</a></li>
                    <li><a href="{{ route('services') }}">Servicios</a></li>
                    <li><a href="{{ route('contact') }}">Contacto</a></li>
                    <li><a href=""></a></li>
                </ul>
            </div>
            <div class="footer-container-box">
                <p class="footer-title m-0">Contacto</p>
                <ul class="d-flex gap-2 footer-socials list-none">
                    <li>
                        <a href="https://facebook.com" target="_blank" class="">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </li>

                    <li><a href="https://github.com" target="_blank" class=""><i class="bi bi-whatsapp"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <p class="copyrigth-text m-0 p-0 text-gray-300"> © 2023 Graph Evolution 🌟</p>
    </footer>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/rs-hm.js') }}"></script>
    @yield('scripts')
</body>

</html>
