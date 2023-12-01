@extends('layout.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('content')
    <section class="content home-content  w-100 flex justify-between items-center ">
        @foreach ($homes as $home)
            <div class="home-text d-flex flex-column gap-2">
                <h2 class="home-title fw-bold">{{ $home->title }}</h2>
                <p class="home-description">{{ $home->description }}
                </p>
                <a href="{{ route('services') }}" class="home-link text-start text-decoration-none fw-medium">Conocer más</a>
            </div>
        @endforeach
        <div class="home-image flex rounded-xl">
            <img src="{{ asset('storage/' . $home->image_file) }}" alt="Imagen"
                class="hero_img object-cover object-center m-auto rounded-3xl" loading="lazy">
        </div>
    </section>
    <div class="ArrowFloat">
        <a href="#services"><i class="bi bi-arrow-down"></i></a>
    </div>

    <section class="content home-about 0 ">
        <article class="home-about-text w-2/5">
            <h2 class="font-bold text-5xl">El diseño es el arte de combinar la creatividad y la tecnología para comunicar
                ideas.</h2>
            <p></p>
            <a href="#services" class="px-10 py-2 bg-[#cf00be] rounded-full">Conocer más</a>
        </article>
        <article class="home-about-cards w-1/2">
            <div class="card-one p-2 rounded-lg w-72">
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

    <section class="content home-services  d-flex flex-column align-items-center " id="services">
        <h2 class="services-title fw-medium">Servicios</h2>
        <p class="services-description text-center">Servicios mas destacados</p>
        <div
            class="services_container flex flex-wrap justify-center items-end w-auto gap-4 sm:items-center sm:justify-center md:justify-center ">
            @foreach ($services as $service)
                <div
                    class="card-services-one relative flex w-80 min-w-min flex-col rounded-xl bg-white text-gray-700 shadow-md h-auto overflow-hidden">
                    <div class="relative m-auto h-auto overflow-hidden  bg-white bg-clip-border text-gray-700">
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
        </div>
    </section>

    <section class="delay_section content">
        <img src="{{ asset('img/graph_evolution_h_i.jpg') }}" alt="" class="object-cover w-full delay_image">
        <div class="delay_text_cont">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quia corporis qui, nobis pariatur
                perspiciatis libero beatae nostrum eligendi fuga totam dolore repudiandae labore officia unde doloribus
                numquam, officiis possimus.</p>
        </div>
        <div class="delay_text_intro">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident dignissimos sequi, nihil sint ratione
                iure vitae perferendis, fugit maxime excepturi dolorum voluptatibus quisquam? Non possimus fuga repellat
                amet veniam pariatur.</p>
        </div>
    </section>

    <section class="content home-preference  d-flex flex-column items-center ">
        <h2 class="pref-title mb-5 fs-1 fw-bold mt-5 text-[#cf00be]">Porque elegirnos?</h2>
        <div class="pref-content flex justify-center gap-10 w-full flex-wrap mt-5">
            <div class="card_pref_blur flex flex-col items-center w-80 min-[200px]: rounded-lg p-3">
                <i class="bi bi-trophy bg-[#cf00bec2] rounded-full "
                    style="padding: 20px 35px; box-shadow: 0 0 0 10px #cf00be21, 0 0 50px #cf00be83, 0 0 100px #cf00be83; font-size: 50px;"></i>
                <div class="card-body mt-3">
                    <h5 class="card-title text-center fs-3 font-bold text-[#bf93ec]">Calidad</h5>
                    <p class="text-gray-400 text-center fs-4">Vivimos en un mundo donde todos dicen que tienen los
                        mejores
                        productos del mercado. Pero una cosa es afirmarlo y la otra es garantizarlo</p>
                </div>
            </div>
            <div class="card_pref_blur flex flex-col items-center w-80 rounded-lg p-3">
                <i class="bi bi-hand-thumbs-up bg-[#cf00bec2] rounded-full"
                    style="padding: 20px 35px;  box-shadow: 0 0 0 10px #cf00be21, 0 0 50px #cf00be83, 0 0 100px #cf00be83; font-size: 50px;"></i>
                <div class="card-body mt-3">
                    <h5 class="card-title text-center fs-3 font-bold text-[#bf93ec]">Honestidad</h5>
                    <p class="text-gray-400 text-center fs-4">La<strong class="bg-[#bf93ec] text-gray-900">
                            transparencia,
                            sinceridad y
                            franqueza,</strong> son
                        valores con las que cuenta Graph Evolutión</p>
                </div>
            </div>
            <div class="card_pref_blur flex flex-col items-center w-80 rounded-lg p-3">
                <i class="bi bi-heart-pulse bg-[#cf00bec2] rounded-full"
                    style="padding: 20px 35px;  box-shadow: 0 0 0 10px #cf00be21, 0 0 50px #cf00be83, 0 0 100px #cf00be83; font-size: 50px;"></i>
                <div class="card-body mt-3">
                    <h5 class="card-title text-center fs-3 font-bold text-[#bf93ec]">Pasión</h5>
                    <p class="text-gray-400 text-center fs-4">Disfrutamos lo que hacemos Por ello, el tener la
                        <strong class="bg-[#bf93ec] text-gray-900">pasión</strong> como uno de nuestro valor los
                        resulatos de
                        nuestro
                        trabajo son
                        satisfactorios para nuestros clientes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner w-full">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="{{ asset('img/carrusel/pr-banner-on.jpg') }}" class="d-block w-auto" alt="Graph Evolution">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="{{ asset('img/carrusel/pr-banner-tw.jpg') }}" class="d-block w-full" alt="Graph Evolution">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="{{ asset('img/carrusel/pr-banner-tr.jpg') }}" class="d-block w-full"
                        alt="Graph Evolution">
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

    <section class="text-content bg-slate-600 my-10  h-60">
        <p class="text-desig text-[200px]  font-bold text-center my-auto">Creative Desing Works </p>
    </section>
@endsection
@section('scripts')
    {{-- <script src="{{ asset('js/hm-reveal.js') }}"></script> --}}
@endsection
