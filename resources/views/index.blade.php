@extends('layout.layout')
@section('title', 'Inicio')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('content')
    <section class="home-content w-100 d-flex">
        @foreach ($homes as $home)
            <div class="home-text d-flex flex-column gap-2">
                <h2 class="home-title fw-bold">{{ $home->title }}</h2>
                <p class="home-description">{{ $home->description }}
                </p>
                <a href="{{ route('services') }}" class="home-link text-start text-decoration-none fw-medium">Conocer más</a>
            </div>
        @endforeach
        <div class="home-image">
            <img src="{{ asset('storage/' . $home->image_file) }}" alt="Imagen" class="w-full object-cover object-center">
        </div>
    </section>
    <div class="ArrowFloat">
        <a href="#services"><i class="bi bi-arrow-down"></i></a>
    </div>
    <section class="home-about">
        <article class="home-about-text w-2/5">
            <h2 class="font-bold">El diseño es el arte de combinar la creatividad y la tecnología para comunicar ideas.</h2>
            <p></p>
            <a href="" class="px-10 py-2 bg-[#cf00be] rounded-full">Conocer más</a>
        </article>
        <article class="home-about-cards w-1/2">
            <div class="card-one p-2 rounded-lg grid-col w-72">
                <img src="{{ asset('img/about/camara.jpg') }}" alt="" width="100%">
            </div>
            <div class="card-two p-2 rounded-lg  w-96 h-auto">
                <img src="{{ asset('img/services/card_design.jpg') }}" alt="" width="100%">
            </div>
            <div class="card-three p-2 rounded-lg w-80">
                <img src="{{ asset('img/services/banner_design.jpg') }}" alt="" width="100%">
            </div>
            <div class="card-four p-2 rounded-lg w-80">
                <img src="{{ asset('img/services/home_design.jpg') }}" alt="" width="100%">
            </div>

        </article>
    </section>

    <section class="home-services d-flex flex-column align-items-center" id="services">
        {{-- <div class="ArrowFloat">
            <a href="#services"><i class="bi bi-arrow-down"></i></a>
        </div> --}}
        <h2 class="services-title fw-medium">Servicios</h2>
        <p class="services-description text-center">Servicios mas destacados</p>
        <div
            class="services_container grid justify-center w-auto gap-4 sm:flex-col sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($services as $service)
                <div
                    class="card-services-one relative flex w-80 min-w-min flex-col rounded-xl bg-white text-gray-700 shadow-md h-auto overflow-hidden mt-5">
                    <div class="relative mx-0 mt-0 h-auto overflow-hidden  bg-white bg-clip-border text-gray-700">
                        <img src="{{ asset('storage/' . $service->images_file) }}" alt="" width="100%"
                            class="w-80 h-56 object-cover object-center">
                    </div>
                    <div class="p-6">
                        <div class="mb-2 flex items-center justify-between">
                            <p class="block font-sans text-base font-medium leading-relaxed text-gray-900">
                                {{ $service->title }}
                            </p>
                            <p class="block font-sans text-xs font-medium leading-relaxed text-pink-500">
                                Apx. &#83;/ {{ $service->price }}
                            </p>
                        </div>
                        <p class="block font-sans text-base font-normal leading-normal text-gray-700 opacity-75">
                            {{ Str::limit($service->description, '70') }}
                            {{-- With plenty of talk and listen time, voice-activated Siri access, and an
                        available wireless charging case. --}}
                        </p>
                    </div>
                    <div class="p-6 pt-0 w-full flex items-center">
                        <a href="{{ route('services') }}"
                            class="w-full rounded-lg bg-gray-300 py-3  text-center font-sans text-xs font-bold uppercase text-gray-900 transition-all hover:scale-105  hover:bg-fuchsia-600 hover:text-white">
                            Ver Ahora
                        </a>
                    </div>
                </div>
            @endforeach
            {{-- <div
                class="card-services-two relative flex w-80 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md overflow-hidden">
                <div class="relative h-auto overflow-hidden bg-white bg-clip-border text-gray-700">
                    <img src="{{ asset('img/services/card_design.jpg') }}" alt="" width="100%">
                </div>
                <div class="p-6">
                    <div class="mb-2 flex items-center justify-between">
                        <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                            Tarjetas de Presentacion
                        </p>
                        <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                            $95.00
                        </p>
                    </div>
                    <p class="block font-sans text-sm font-normal leading-normal text-gray-700 antialiased opacity-75">
                        With plenty of talk and listen time, voice-activated Siri access, and an
                        available wireless charging case.
                    </p>
                </div>
                <div class="p-6 pt-0 w-full flex items-center">
                    <a href="{{ route('services') }}"
                        class=" bg-gray-300 w-full rounded-lg py-3 text-center font-sans text-xs font-bold uppercase text-gray-900 transition-all hover:scale-105  hover:bg-fuchsia-600 hover:text-white">
                        Ver Ahora
                    </a>
                </div>
            </div>
            <div
                class="card-services-three relative flex w-80 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md overflow-hidden">
                <div class="relative h-auto overflow-hidden bg-white bg-clip-border text-gray-700">
                    <img src="{{ asset('img/services/banner_design.jpg') }}" alt="" width="100%">
                </div>
                <div class="p-6">
                    <div class="mb-2 flex items-center justify-between">
                        <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                            Banners
                        </p>
                        <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                            $95.00
                        </p>
                    </div>
                    <p class="block font-sans text-sm font-normal leading-normal text-gray-700 antialiased opacity-75">
                        With plenty of talk and listen time, voice-activated Siri access, and an
                        available wireless charging case.
                    </p>
                </div>
                <div class="p-6 pt-0 w-full flex items-center">
                    <a href="{{ route('services') }}"
                        class="bg-gray-300 w-full rounded-lg  py-3 text-center font-sans text-xs font-bold uppercase text-gray-900 transition-all hover:scale-105  hover:bg-fuchsia-600 hover:text-white"
                        type="button">
                        Ver Ahora
                    </a>
                </div>
            </div>
            <div
                class="card-services-four relative flex w-80 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md overflow-hidden">
                <div class="relative h-auto overflow-hidden bg-white bg-clip-border text-gray-700">
                    <img src="{{ asset('img/services/camara.jpg') }}" alt="" width="100%">
                </div>
                <div class="p-6">
                    <div class="mb-2 flex items-center justify-between">
                        <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                            Volantes
                        </p>
                        <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                            $95.00
                        </p>
                    </div>
                    <p class="block font-sans text-sm font-normal leading-normal text-gray-700 antialiased opacity-75">
                        With plenty of talk and listen time, voice-activated Siri access, and an
                        available wireless charging case.
                    </p>
                </div>
                <div class="p-6 pt-0 w-full flex items-center">
                    <a href="{{ route('services') }}"
                        class="bg-gray-300 w-full rounded-lg py-3 text-center font-sans text-xs font-bold uppercase text-gray-900 transition-all hover:scale-105  hover:bg-fuchsia-600 hover:text-white"
                        type="button">
                        Ver Ahora
                    </a>
                </div>
            </div> --}}
        </div>
    </section>

    <section class="home-preference  d-flex flex-column align-items-center">
        <h2 class="pref-title mb-5 fs-1 fw-bold mt-5 text-[#cf00be]">Porque elegirnos?</h2>
        <div class="pref-content d-flex justify-content-center gap-5 w-75 flex-wrap mt-5">
            <div class="card d-flex flex-column align-items-center pt-4 bg-transparent" style="width: 23rem;">
                <i class="bi bi-trophy bg-[#cf00bec2] rounded-full "
                    style="padding: 20px 35px; box-shadow: 0 0 0 10px #cf00be21, 0 0 50px #cf00be83, 0 0 100px #cf00be83; font-size: 50px;"></i>
                <div class="card-body">
                    <h5 class="card-title text-center fs-3">Calidad</h5>
                    <p class="card-text text-center fs-4">Vivimos en un mundo donde todos dicen que tienen los mejores
                        productos del mercado. Pero una cosa es afirmarlo y la otra es garantizarlo</p>
                </div>
            </div>
            <div class="card d-flex flex-column align-items-center pt-4 bg-transparent" style="width: 23rem;">
                <i class="bi bi-hand-thumbs-up bg-[#cf00bec2] rounded-full"
                    style="padding: 20px 35px;  box-shadow: 0 0 0 10px #cf00be21, 0 0 50px #cf00be83, 0 0 100px #cf00be83; font-size: 50px;"></i>
                <div class="card-body">
                    <h5 class="card-title text-center fs-3">Honestidad</h5>
                    <p class="card-text text-center fs-4">La<strong class="bg-[#cf00be1e]"> transparencia, sinceridad y
                            franqueza,</strong> son
                        valores con las que cuenta Graph Evolutión</p>
                </div>
            </div>
            <div class="card d-flex flex-column align-items-center pt-4 bg-transparent" style="width: 23rem;">
                <i class="bi bi-heart-pulse bg-[#cf00bec2] rounded-full"
                    style="padding: 20px 35px;  box-shadow: 0 0 0 10px #cf00be21, 0 0 50px #cf00be83, 0 0 100px #cf00be83; font-size: 50px;"></i>
                <div class="card-body">
                    <h5 class="card-title text-center fs-3">Pasión</h5>
                    <p class="card-text text-center fs-4">Disfrutamos lo que hacemos Por ello, el tener la
                        <strong class="bg-[#cf00be21]">pasión</strong> como uno de nuestro valor los resulatos de nuestro
                        trabajo son
                        satisfactorios para nuestros clientes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full">

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner w-full">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="{{ asset('img/carrusel/pr-banner-on.jpg') }}" class="d-block w-full" alt="Graph Evolution">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="{{ asset('img/carrusel/pr-banner-tw.jpg') }}" class="d-block w-full" alt="Graph Evolution">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="{{ asset('img/carrusel/pr-banner-tr.jpg') }}" class="d-block w-full" alt="Graph Evolution">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="{{ asset('img/carrusel/pr-banner-fr.jpg') }}" class="d-block w-full"
                        alt="Graph Evolution">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </section>


@endsection
@section('scripts')
    <script src="{{ asset('js/hm-reveal.js') }}"></script>


@endsection
