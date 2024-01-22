@extends('layout.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('content')
    {{-- Primera seccion --}}
    <div class="app app-hero">
        <section class="hero-section">
            @foreach ($homes as $item)
                <article class="hero-text">
                    <h1 class="section-title text-gradient">{{ $item->title }}</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Cras id purus tellus. Sed mi sapien, tempus eget mollis quis,
                        aliquam sit amet quam.</p>
                    <a href="{{ route('services') }}" class="btn-select">Conocer más</a>
                </article>
                <article class="hero-img">
                    <img src="{{ asset('img/services/banner_design.jpg') }}" alt="">
                    <img class="img-center" src="{{ asset('storage/' . $item->image_file) }}" alt="">
                    <img src="{{ asset('img/services/card_design.jpg') }}" alt="">
                </article>
            @endforeach
        </section>
    </div>

    <x-app>
        <section class="section diseño-section">
            <div class="img-container">
                <img class="diseño-img" src="{{ asset('img/capture.webp') }}" alt="">
            </div>
        </section>
    </x-app>

    <x-app class="app app-experience">
        <section class="section experience-section">
            <article class="experience-cards">
                <div class="card-experience">
                    <h2 class=" experience-title">+10 años</h2>
                    <span>Experiencia</span>
                </div>
                <div class="card-experience">
                    <h2 class=" experience-title">+1000</h2>
                    <span>Clientes</span>
                </div>
                <div class="card-experience">
                    <h2 class="experience-title">+30</h2>
                    <span>Servicios</span>
                </div>
                <div class="card-experience">
                    <h2 class="experience-title">+10000</h2>
                    <span>Trabajos</span>
                </div>
            </article>
        </section>
    </x-app>

    <x-app class="app-services">
        <section class="section services-section">
            <h2 class="section-subtitle">Servicios</h2>
            <p class="services-info">Los servicios que elija estan a disposición</p>
            <article class="services-cards">
                @foreach ($services as $item)
                    <div class="services-card">
                        <img class="card-img" src="{{ asset('storage/' . $item->images_file) }}" alt="">
                        <div class="card-info">
                            <div>
                                <h2 class="card-title">{{ $item->title }}</h2>
                                <p class="card-description">
                                    {{ Str::limit($item->description, '41') }}
                                </p>
                            </div>
                            <a href="" class="btn-unselect">
                                <svg width="11" height="18" viewBox="0 0 11 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.7 0L0.300003 1.5L7.7 9L0.300003 16.5L1.7 18L10.7 9L1.7 0Z"
                                        fill="currentColor" />
                                </svg>

                            </a>
                        </div>
                    </div>
                @endforeach

            </article>
        </section>
    </x-app>



    <x-app>
        <div class="app app-design">
            <section class="section design-section">
                <h2 class="section-subtitle">Diseños</h2>
                <p class="design-info">Algunos de nuestros trabajos realizados</p>
                <article class="design-container">
                    @foreach ($services as $item)
                        <img class="design-img" src="{{ asset('storage/' . $item->images_file) }}"" alt="">
                    @endforeach

                    {{-- <img class="design-img" src="{{ asset('storage/' . $item->images_file) }}"" alt="">
                    <img class="design-img" src="{{ asset('storage/' . $item->images_file) }}"" alt="">
                    <img class="design-img" src="{{ asset('img/services/card_services.jpg') }}" alt="">
                    <img class="design-img" src="{{ asset('img/services/card_services.jpg') }}" alt="">
                    <img class="design-img" src="{{ asset('img/services/card_services.jpg') }}" alt="">
                    <img class="design-img" src="{{ asset('img/services/card_services.jpg') }}" alt=""> --}}

                </article>
            </section>
        </div>
    </x-app>



    <div class="app app-motive">
        <section class="section motive-section">
            <h2 class="section-subtitle">Porque elegirnos?</h2>
            <p class="motive-info">3 motivos por las que debe confiar en Graph Evolution al contratar un servicio</p>
            <article class="motive-cards">
                <div class="motive-card">
                    <svg width="76" height="76" viewBox="0 0 76 76" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M74.85 4.34005C74.7374 3.55074 74.3761 2.81787 73.8187 2.24783C73.2612 1.67779 72.5366 1.30026 71.75 1.17005C64.6862 -0.00761949 57.4341 0.796529 50.7999 3.49312C44.1656 6.18972 38.4091 10.6731 34.17 16.4451L33.39 17.5051L20.44 18.0651C19.6522 18.0975 18.8946 18.3774 18.275 18.8651L1.48 32.1351C0.957472 32.5484 0.554482 33.0934 0.312485 33.7141C0.0704879 34.3348 -0.00177833 35.0088 0.10312 35.6667C0.208019 36.3246 0.486295 36.9427 0.909323 37.4574C1.33235 37.9721 1.88485 38.3648 2.51 38.5951L19.25 44.7601C22.615 46.1251 24.9 47.5601 26.67 49.3251C28.43 51.0901 29.87 53.3801 31.235 56.7451L37.405 73.4951C37.6359 74.1198 38.029 74.6719 38.5439 75.0944C39.0589 75.5169 39.677 75.7946 40.3349 75.899C40.9927 76.0034 41.6665 75.9306 42.287 75.6883C42.9074 75.4459 43.4521 75.0427 43.865 74.5201L57.125 57.7201C57.6107 57.1032 57.8905 56.3494 57.925 55.5651L58.49 42.6101L59.55 41.8301C65.3095 37.6002 69.7862 31.8592 72.4848 25.2425C75.1834 18.6257 75.9985 11.3914 74.84 4.34005H74.85ZM21.97 25.5051L27.69 25.2551L19.24 36.7651L11.38 33.8651L21.97 25.5051ZM42.13 64.6151L39.23 56.7551L50.74 48.3051L50.49 54.0301L42.13 64.6151ZM67.765 8.23005C62.4753 7.82533 57.1696 8.77482 52.3486 10.989C47.5275 13.2031 43.35 16.6089 40.21 20.8851L26.31 39.8151C28.435 41.0001 30.31 42.3651 31.97 44.0251C33.63 45.6851 35 47.5601 36.18 49.6901L55.11 35.7901C59.386 32.6491 62.7913 28.4705 65.0046 23.6485C67.2179 18.8265 68.1662 13.5201 67.76 8.23005H67.765ZM9.89 67.7601C9.265 67.8707 8.63627 67.9591 8.005 68.0251C8.06789 67.4124 8.15127 66.8021 8.255 66.1951C8.775 63.2451 9.725 61.1251 10.89 59.9601C12.11 58.7401 14.36 58.5901 15.91 60.1401C17.46 61.6901 17.315 63.9401 16.09 65.1651C14.975 66.2801 12.87 67.2301 9.89 67.7601ZM0.4 73.3451C0.292523 71.3781 0.334309 69.4057 0.525 67.4451C0.935 63.2551 2.175 58.0651 5.585 54.6601C9.85 50.3901 16.85 50.4701 21.215 54.8351C25.58 59.2051 25.665 66.2001 21.395 70.4651C15.985 75.8751 5.835 75.8051 2.72 75.6451C2.1168 75.6097 1.5483 75.3512 1.125 74.9201C0.696771 74.5008 0.438568 73.9381 0.4 73.3401V73.3451Z"
                            fill="#5605E7" />
                    </svg>

                    <h2 class="card-motive-title">Experiencia y Profesionalismo</h2>
                    <p class="card-motive-info">Tenemos 10 años de experiencia en el mercado manteniendonos entre los primeros en nuestra región.</p>
                </div>
                <div class="motive-card">
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M72.9111 22.8765C73.2563 22.532 73.5301 22.1229 73.717 21.6724C73.9038 21.222 74 20.7391 74 20.2514C74 19.7638 73.9038 19.2809 73.717 18.8305C73.5301 18.38 73.2563 17.9709 72.9111 17.6264L62.3736 7.08891C62.0291 6.74373 61.62 6.46988 61.1695 6.28303C60.7191 6.09618 60.2362 6 59.7486 6C59.2609 6 58.778 6.09618 58.3276 6.28303C57.8771 6.46988 57.468 6.74373 57.1235 7.08891L40.405 23.8074L25.9207 9.32301C23.0163 6.41868 18.2875 6.41868 15.3832 9.32301L8.30856 16.3976C5.40424 19.302 5.40424 24.0308 8.30856 26.9351L22.7929 41.4195L6 58.2124V74H21.7876L38.6178 57.1698L53.1021 71.6542C56.6394 75.1915 61.4055 73.8883 63.6396 71.6542L70.7142 64.5796C73.6185 61.6753 73.6185 56.9464 70.7142 54.0421L56.2299 39.5577L72.9111 22.8765ZM13.5959 21.6478L20.6333 14.5731L25.3621 19.302L20.9684 23.7329L26.2185 28.983L30.6495 24.5521L35.1177 29.0203L28.0431 36.0949L13.5959 21.6478ZM55.4107 49.3505L50.9797 53.7815L56.2299 59.0316L60.6608 54.6006L65.3896 59.3295L58.315 66.4041L43.8306 51.9197L50.9053 44.8451L55.4107 49.3505ZM18.6971 66.553H13.447V61.3029L49.2297 25.5202L54.0702 30.3607L54.4798 30.7703L18.6971 66.553ZM54.4798 20.2328L59.7299 14.9827L64.9801 20.2328L59.7299 25.4829L54.4798 20.2328Z"
                            fill="#5605E7" />
                    </svg>



                    <h2 class="card-motive-title">Variedad de Servicios y Soluciones Personalizadas</h2>
                    <p class="card-motive-info">Ofrecemos variedad de servicios a su disposición personalizadas acorde a sus requerimientos.
                    </p>
                </div>
                <div class="motive-card">
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M59.4444 18.6471C59.4444 15.5581 58.2153 12.5956 56.0274 10.4113C53.8394 8.2271 50.872 7 47.7778 7H32.2222C29.128 7 26.1606 8.2271 23.9726 10.4113C21.7847 12.5956 20.5556 15.5581 20.5556 18.6471H16.6667C13.5725 18.6471 10.605 19.8742 8.41709 22.0584C6.22916 24.2427 5 27.2051 5 30.2941V61.3529C5 64.4419 6.22916 67.4044 8.41709 69.5887C10.605 71.7729 13.5725 73 16.6667 73H63.3333C66.4275 73 69.395 71.7729 71.5829 69.5887C73.7708 67.4044 75 64.4419 75 61.3529V30.2941C75 27.2051 73.7708 24.2427 71.5829 22.0584C69.395 19.8742 66.4275 18.6471 63.3333 18.6471H59.4444ZM47.7778 14.7647H32.2222C31.1908 14.7647 30.2017 15.1737 29.4724 15.9018C28.7431 16.6299 28.3333 17.6174 28.3333 18.6471H51.6667C51.6667 17.6174 51.2569 16.6299 50.5276 15.9018C49.7983 15.1737 48.8092 14.7647 47.7778 14.7647ZM16.6667 26.4118H63.3333C64.3647 26.4118 65.3539 26.8208 66.0832 27.5489C66.8125 28.277 67.2222 29.2645 67.2222 30.2941V61.3529C67.2222 62.3826 66.8125 63.3701 66.0832 64.0982C65.3539 64.8263 64.3647 65.2353 63.3333 65.2353H16.6667C15.6353 65.2353 14.6461 64.8263 13.9168 64.0982C13.1875 63.3701 12.7778 62.3826 12.7778 61.3529V30.2941C12.7778 29.2645 13.1875 28.277 13.9168 27.5489C14.6461 26.8208 15.6353 26.4118 16.6667 26.4118Z"
                            fill="#5605E7" />
                    </svg>




                    <h2 class="card-motive-title">Calidad y Tecnología moderna</h2>
                    <p class="card-motive-info">Nuestros trabajos de calidad hacen de nosotros una empresa lider, ofreciendo el mejor servicio posible con la tecnologia actual.</p>
                </div>
            </article>
        </section>
    </div>
    <div class="app app-contact">
        <section class="section contact-section">
            <h2 class="">Envie sus consulta para obtener mas información</h2>
            <p class="contact-info">No dude en enviarnos un mensaje para cotizar algun servicio de su interes o interactue con nuestro asistente incluida en nuestro Sitio</p>
            <a href="{{route('contact')}}" class="btn-select" style="display: block">Contactar</a>
        </section>
    </div>



    {{-- Tercera seccin --}}
    {{-- <x-app class="home-gradient mt-16">
        <x-section-container class="py-20 grid grid-cols-1 lg:grid-cols-2 gap-7">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                @foreach ($services as $image)
                    <div
                        class="image-item relative overflow-hidden rounded-lg hover:scale-110 transition-all @if (count($services) === 1) full-width @endif">
                        <img src="{{ asset('storage/' . $image->images_file) }}" alt="{{ $image->alt }}">
                    </div>
                @endforeach
            </div>
        </x-section-container>
    </x-app> --}}


@endsection
@section('scripts')
    <script src="{{ asset('js/hm-reveal.js') }}"></script>
@endsection
