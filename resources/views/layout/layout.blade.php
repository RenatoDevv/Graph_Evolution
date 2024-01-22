<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Graph Evolution - @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div
        class="absolute top-0 z-[-2] h-screen w-full bg-neutral-950 bg-[radial-gradient(ellipse_80%_80%_at_50%_-20%,rgba(120,119,198,0.3),rgba(255,255,255,0))]">
    </div>
    @inject('mesagges', 'App\Models\Mesagge')
    @php
        $messages = App\Models\Mesagge::take(1)->get();
    @endphp
    <div class="notify-events">
        @foreach ($messages as $moot)
            <p class="text-sm">🎄🤶 {{ $moot->message }} ❄️🤶🎄</p>
        @endforeach
    </div>

    <x-app>
        <header class="">
            <div class="logo">
                <a class="" href="{{ route('home') }}" class="text-decoration-none"><img
                        class="max-w-full w-[5.5rem]" src="{{ asset('img/logo.png') }}" alt="" width="100%">
                </a>
            </div>
            <nav class="nav">
                <ul>
                    <li><a href="{{ route('home') }}">Inicio</a></li>
                    <li><a href="{{ route('services') }}">Servicios</a></li>
                    <li><a href="{{ route('about') }}">Nosotros</a></li>
                    <li><a href="{{ route('help') }}">Soporte</a></li>
                </ul>
            </nav>
            <a href="{{route('contact')}}" class="btn-unselect contact-btn">Contactar</a>
            <button class="menu"><i class="bi bi-list"></i></button>
        </header>

    </x-app>
    <main class="w-full">
        @yield('content')
    </main>
    <x-app class="bg-[#0c0a11]">
        <footer>
            <article>
                <h2 class="footer-title">Graph Evolution</h2>
                <p>Transformando ideas</p>
            </article>
            <article>
                <h2 class="footer-title">Empresa</h2>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}">Inicio</a></li>
                    <li><a href="{{ route('about') }}">Nosotros</a></li>
                    <li><a href="#">Seguridad</a></li>
                    <li><a href="{{ route('contact') }}">Contacto</a></li>
                </ul>
            </article>
            <article>
                <h2 class="footer-title">Servicios</h2>
                <ul class="footer-links">
                    <li><a href="{{ route('services') }}">Diseño</a></li>
                    <li><a href="{{ route('services') }}">Impresión</a></li>
                    <li><a href="{{ route('services') }}">Implementación</a></li>
                </ul>
            </article>
            <article>
                <h2 class="footer-title">Siguenos</h2>
                <ul class="footer-socials">
                    <li>
                        <a href="">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20 10.0251C20 4.50515 15.52 0.0251465 10 0.0251465C4.48 0.0251465 0 4.50515 0 10.0251C0 14.8651 3.44 18.8951 8 19.8251V13.0251H6V10.0251H8V7.52515C8 5.59515 9.57 4.02515 11.5 4.02515H14V7.02515H12C11.45 7.02515 11 7.47515 11 8.02515V10.0251H14V13.0251H11V19.9751C16.05 19.4751 20 15.2151 20 10.0251Z"
                                    fill="#055FE7" />
                            </svg>
                        </a>
                    </li>
                    <li><a href="">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.0286 0C12.1536 0.003 12.7246 0.009 13.2176 0.023L13.4116 0.03C13.6356 0.038 13.8566 0.0479999 14.1236 0.0599999C15.1876 0.11 15.9136 0.278 16.5506 0.525C17.2106 0.779 17.7666 1.123 18.3226 1.678C18.8311 2.1779 19.2245 2.78259 19.4756 3.45C19.7226 4.087 19.8906 4.813 19.9406 5.878C19.9526 6.144 19.9626 6.365 19.9706 6.59L19.9766 6.784C19.9916 7.276 19.9976 7.847 19.9996 8.972L20.0006 9.718V11.028C20.003 11.7574 19.9954 12.4868 19.9776 13.216L19.9716 13.41C19.9636 13.635 19.9536 13.856 19.9416 14.122C19.8916 15.187 19.7216 15.912 19.4756 16.55C19.2253 17.2178 18.8317 17.8226 18.3226 18.322C17.8225 18.8303 17.2179 19.2238 16.5506 19.475C15.9136 19.722 15.1876 19.89 14.1236 19.94C13.8863 19.9512 13.649 19.9612 13.4116 19.97L13.2176 19.976C12.7246 19.99 12.1536 19.997 11.0286 19.999L10.2826 20H8.97358C8.24384 20.0025 7.5141 19.9948 6.78458 19.977L6.59058 19.971C6.35319 19.962 6.11585 19.9517 5.87858 19.94C4.81458 19.89 4.08858 19.722 3.45058 19.475C2.78325 19.2244 2.17879 18.8308 1.67958 18.322C1.17062 17.8223 0.776801 17.2176 0.525577 16.55C0.278577 15.913 0.110577 15.187 0.0605769 14.122C0.0494358 13.8847 0.0394357 13.6474 0.030577 13.41L0.0255771 13.216C0.00714914 12.4868 -0.00118508 11.7574 0.000577001 11.028V8.972C-0.00221397 8.2426 0.00512015 7.5132 0.0225771 6.784L0.029577 6.59C0.037577 6.365 0.047577 6.144 0.059577 5.878C0.109577 4.813 0.277577 4.088 0.524577 3.45C0.775691 2.7819 1.1703 2.17702 1.68058 1.678C2.17967 1.16947 2.78372 0.775987 3.45058 0.525C4.08858 0.278 4.81358 0.11 5.87858 0.0599999C6.14458 0.0479999 6.36658 0.038 6.59058 0.03L6.78458 0.0239999C7.51377 0.00623271 8.24317 -0.0014347 8.97258 0.000999928L11.0286 0ZM10.0006 5C8.67449 5 7.40272 5.52678 6.46504 6.46447C5.52736 7.40215 5.00058 8.67392 5.00058 10C5.00058 11.3261 5.52736 12.5979 6.46504 13.5355C7.40272 14.4732 8.67449 15 10.0006 15C11.3267 15 12.5984 14.4732 13.5361 13.5355C14.4738 12.5979 15.0006 11.3261 15.0006 10C15.0006 8.67392 14.4738 7.40215 13.5361 6.46447C12.5984 5.52678 11.3267 5 10.0006 5ZM10.0006 7C10.3945 6.99993 10.7847 7.07747 11.1487 7.22817C11.5127 7.37887 11.8434 7.5998 12.122 7.87833C12.4007 8.15686 12.6217 8.48754 12.7725 8.85149C12.9233 9.21544 13.001 9.60553 13.0011 9.9995C13.0011 10.3935 12.9236 10.7836 12.7729 11.1476C12.6222 11.5116 12.4013 11.8423 12.1228 12.121C11.8442 12.3996 11.5135 12.6206 11.1496 12.7714C10.7856 12.9223 10.3955 12.9999 10.0016 13C9.20593 13 8.44287 12.6839 7.88026 12.1213C7.31765 11.5587 7.00158 10.7956 7.00158 10C7.00158 9.20435 7.31765 8.44129 7.88026 7.87868C8.44287 7.31607 9.20593 7 10.0016 7M15.2516 3.5C14.9201 3.5 14.6021 3.6317 14.3677 3.86612C14.1333 4.10054 14.0016 4.41848 14.0016 4.75C14.0016 5.08152 14.1333 5.39946 14.3677 5.63388C14.6021 5.8683 14.9201 6 15.2516 6C15.5831 6 15.901 5.8683 16.1355 5.63388C16.3699 5.39946 16.5016 5.08152 16.5016 4.75C16.5016 4.41848 16.3699 4.10054 16.1355 3.86612C15.901 3.6317 15.5831 3.5 15.2516 3.5Z"
                                    fill="#E7058D" />
                            </svg>
                        </a></li>
                    <li>
                        <a href="">
                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.001 0.000244141H2.00104C0.901038 0.000244141 0.0110376 0.900244 0.0110376 2.00024L0.0010376 14.0002C0.0010376 15.1002 0.901038 16.0002 2.00104 16.0002H18.001C19.101 16.0002 20.001 15.1002 20.001 14.0002V2.00024C20.001 0.900244 19.101 0.000244141 18.001 0.000244141ZM18.001 4.00024L10.001 9.00024L2.00104 4.00024V2.00024L10.001 7.00024L18.001 2.00024V4.00024Z"
                                    fill="#5605E7" />
                            </svg>

                        </a>
                    </li>
                </ul>
            </article>
        </footer>
    </x-app>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/rs-hm.js') }}"></script>
    <script>
        window.addEventListener('mouseover', initLandbot, {
            once: true
        });
        window.addEventListener('touchstart', initLandbot, {
            once: true
        });
        var myLandbot;

        function initLandbot() {
            if (!myLandbot) {
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.addEventListener('load', function() {
                    var myLandbot = new Landbot.Livechat({
                        configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-2097843-JCEMQZ06UD42VE92/index.json',
                    });
                });
                s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.js';
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            }
        }
    </script>
    @yield('scripts')
</body>

</html>
