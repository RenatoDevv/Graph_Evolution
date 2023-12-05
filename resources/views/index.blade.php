@extends('layout.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('content')
    <section class="content home-content  w-100 flex justify-between items-end">
        @foreach ($homes as $home)
            <div class="home-text d-flex flex-column gap-2">
                <div class="text-start order-2 max-w-3xl animate-hero-text-slide-up-fade sm:shrink-0 md:order-1 lg:pl-16">
                    <h1
                        class="home-title text-start text-9xl md:text-7xl md:leading-[8rem] tracking-tight font-bold
                        ">
                        {{ $home->title }}</h1>
                    <p
                        class="mb-8 mt-4 max-w-[30rem] leading-7 md:text-left text-base md:text-[1.125rem] md:leading-[1.5] text-slate-11 font-normal text-start">
                        {{ $home->description }}</p>
                    <div class="flex gap-3">

                        <a href="{{ route('services') }}"
                            class="inline-flex justify-center items-center py-2 px-3 text-base font-medium text-center text-white rounded-lg bg-[#cf0068] hover:bg-[#cf0068b2] ">
                            Conocer más
                            <svg class="w-4 h-3.5 ms-2 rtl:rotate-180" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M13 9h-2V7h2m0 10h-2v-6h2m-1-9A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2Z" />
                            </svg>
                        </a>
                        <a href="{{ route('services') }}"
                            class="inline-flex justify-center items-center py-2 px-3 text-base font-medium text-center text-white rounded-lg border-1 border-[#cf0068] hover:bg-[#cf0068]  ">
                            Ver Servicios
                            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="home-image flex rounded-xl mr-5 md:mr-0">
            <img src="{{ asset('storage/' . $home->image_file) }}" alt="Imagen"
                class="hero_img object-cover object-center m-auto rounded-3xl" loading="lazy">
        </div>
    </section>
    <div class="ArrowFloat">
        <a href="#services"><i class="bi bi-arrow-down"></i></a>
    </div>

    <section class="w-full flex justify-evenly items-center py-5 my-28 border-t border-gray-800 overflow-hidden flex-wrap">
        <div class=" font-medium text-3xl text-yellow- flex items-center gap-3 ">
            <svg width="50" height="50" viewBox="0 0 24 24" class=" text-[#cf0068a1]">
                <path fill="currentColor"
                    d="m8.8 10.95l2.15-2.175l-1.4-1.425l-1.1 1.1l-1.4-1.4l1.075-1.1L7 4.825L4.825 7L8.8 10.95Zm8.2 8.225L19.175 17l-1.125-1.125l-1.1 1.075l-1.4-1.4l1.075-1.1l-1.425-1.4l-2.15 2.15L17 19.175Zm-.775-12.75l1.4 1.4l1.4-1.4L17.6 5l-1.375 1.425ZM7.25 21H3v-4.25l4.375-4.375L2 7l5-5l5.4 5.4l3.775-3.8q.3-.3.675-.45t.775-.15q.4 0 .775.15t.675.45L20.4 4.95q.3.3.45.675T21 6.4q0 .4-.15.763t-.45.662l-3.775 3.8L22 17l-5 5l-5.375-5.375L7.25 21Z" />
            </svg>

            <span class=" pencil_icon font-serif">Diseño</span>
        </div>
        <div class=" font-medium text-3xl text-yellow- flex items-center gap-3">
            <svg width="40" height="40" fill="currentColor" viewBox="0 0 16 16" class="text-[#0099ff85]">
                <path
                    d="M8.354.146a.5.5 0 0 0-.708 0l-3 3a.5.5 0 0 0 0 .708l1 1a.5.5 0 0 0 .708 0L7 4.207V12H1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1H9V4.207l.646.647a.5.5 0 0 0 .708 0l1-1a.5.5 0 0 0 0-.708l-3-3z" />
                <path
                    d="M1 7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h4.5a.5.5 0 0 0 0-1H1V8h4.5a.5.5 0 0 0 0-1zm9.5 0a.5.5 0 0 0 0 1H15v2h-4.5a.5.5 0 0 0 0 1H15a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1z" />
            </svg>
            <span class="print_icon  font-serif">Impresión</span>
        </div>
        <div class=" font-medium text-3xl text-yellow- flex items-center gap-3 ">
            <svg width="50" height="50" viewBox="0 0 24 24" class=" text-[#cf0068a4] ">
                <path fill="currentColor"
                    d="m8.8 10.95l2.15-2.175l-1.4-1.425l-1.1 1.1l-1.4-1.4l1.075-1.1L7 4.825L4.825 7L8.8 10.95Zm8.2 8.225L19.175 17l-1.125-1.125l-1.1 1.075l-1.4-1.4l1.075-1.1l-1.425-1.4l-2.15 2.15L17 19.175Zm-.775-12.75l1.4 1.4l1.4-1.4L17.6 5l-1.375 1.425ZM7.25 21H3v-4.25l4.375-4.375L2 7l5-5l5.4 5.4l3.775-3.8q.3-.3.675-.45t.775-.15q.4 0 .775.15t.675.45L20.4 4.95q.3.3.45.675T21 6.4q0 .4-.15.763t-.45.662l-3.775 3.8L22 17l-5 5l-5.375-5.375L7.25 21Z" />
            </svg>
            <span class=" pencil_icon font-serif">Diseño</span>
        </div>
        <div class="  text-3xl text-yellow- flex items-center gap-3">
            <svg width="40" height="40" fill="currentColor" viewBox="0 0 16 16" class="text-[#0099ff7e]">
                <path
                    d="M8.354.146a.5.5 0 0 0-.708 0l-3 3a.5.5 0 0 0 0 .708l1 1a.5.5 0 0 0 .708 0L7 4.207V12H1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1H9V4.207l.646.647a.5.5 0 0 0 .708 0l1-1a.5.5 0 0 0 0-.708l-3-3z" />
                <path
                    d="M1 7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h4.5a.5.5 0 0 0 0-1H1V8h4.5a.5.5 0 0 0 0-1zm9.5 0a.5.5 0 0 0 0 1H15v2h-4.5a.5.5 0 0 0 0 1H15a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1z" />
            </svg>
            <span class="print_icon font-serif">Impresión</span>
        </div>
    </section>

    <section class="content home-about mt-14 py-20 ">
        <article class="home-about-text w-2/5">
            <h2 class="font-bold text-5xl">El diseño es el arte de combinar la creatividad y la tecnología para comunicar
                ideas.</h2>
            <p></p>
            <a href="#services"
                class="inline-flex justify-center items-center py-2 px-3 text-base font-medium text-center text-white rounded-lg bg-[#cf0068] hover:bg-[#cf0068c7] focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Conocer más
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
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

    <section class="content home-services  d-flex flex-column align-items-center mt-28 ">
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
                            class="w-full rounded-lg bg-gray-300 py-3  text-center font-sans text-xs font-bold uppercase text-gray-900 transition-all hover:scale-105  hover:bg-[#cf0068] hover:text-white">
                            Ver Ahora
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="delay_section">
        <img src="{{ asset('img/graph_evolution_h_i.jpg') }}" alt="" class="object-cover w-full delay_image">
    </section>

    <section class="content home-preference  d-flex flex-column items-center ">
        <h2 class="pref-title mb-5 fs-1 fw-bold mt-5 text-[#cf00be]">Porque elegirnos?</h2>
        <div class="pref-content flex justify-center gap-3 w-full flex-wrap mt-5 max-w-4xl">
            <div class="card_pref_blur flex flex-col items-center  rounded-2xl p-3">
                <i class="bi bi-trophy bg-[#cf0068] rounded-full "
                    style="padding: 20px 35px; box-shadow: 0 0 0 10px #cf00be21, 0 0 50px #cf00be83, 0 0 100px #cf00be83; font-size: 50px;"></i>
                <div class="card-body mt-3">
                    <h5 class="card-title text-center fs-3 font-bold text-[#bf93ec]">Calidad</h5>
                    <p class="text-gray-400 text-center fs-4">Vivimos en un mundo donde todos dicen que tienen los
                        mejores
                        productos del mercado. Pero una cosa es afirmarlo y la otra es garantizarlo</p>
                </div>
            </div>
            <div class="card_pref_blur flex flex-col justify-center items-center rounded-2xl p-3">
                <p></p>
                <svg width="80" height="80" viewBox="0 0 256 256" class="text-[#cf0068]">
                    <path fill="currentColor"
                        d="m235.39 84.07l-28.15 24l8.43 35.73a13.09 13.09 0 0 1-5 13.58a13.25 13.25 0 0 1-14.63.7l-32-19l-32 19a13.25 13.25 0 0 1-14.63-.7a13.1 13.1 0 0 1-5-13.58l8.43-35.73l-28.16-24A13.13 13.13 0 0 1 100.1 61l37.23-3.15L151.85 24a13.24 13.24 0 0 1 24.31 0l14.52 33.87L227.9 61a13.12 13.12 0 0 1 7.49 23.06ZM85.66 114.34a8 8 0 0 0-11.32 0l-56 56a8 8 0 0 0 11.32 11.32l56-56a8 8 0 0 0 0-11.32Zm16 56a8 8 0 0 0-11.32 0l-56 56a8 8 0 0 0 11.32 11.32l56-56a8 8 0 0 0 0-11.32Zm60.69 0l-56 56a8 8 0 0 0 11.32 11.32l56-56a8 8 0 0 0-11.31-11.32Z" />
                </svg>
            </div>
            <div class="card_pref_blur flex flex-col justify-center items-center rounded-2xl p-3">
                <svg width="80" height="90" viewBox="0 0 32 32" class="text-[#cf0068]">
                    <path fill="currentColor"
                        d="M28 30h-6a2.002 2.002 0 0 1-2-2v-6a2.002 2.002 0 0 1 2-2h6a2.002 2.002 0 0 1 2 2v6a2.002 2.002 0 0 1-2 2zm-6-8h-.001L22 28h6v-6zm-4 4h-6a3.003 3.003 0 0 1-3-3v-4h2v4a1.001 1.001 0 0 0 1 1h6zm8-8h-2v-3a1.001 1.001 0 0 0-1-1h-5v-2h5a3.003 3.003 0 0 1 3 3zm-11 0a.999.999 0 0 1-.497-.132L10 15.288l-4.503 2.58a1 1 0 0 1-1.471-1.094l1.061-4.572l-2.818-3.02a1 1 0 0 1 .566-1.668l4.2-.702l2.066-4.25a1 1 0 0 1 1.788-.02l2.204 4.27l4.077.702a1 1 0 0 1 .561 1.668l-2.818 3.02l1.06 4.572A1 1 0 0 1 15 18zm-5-5s.343.18.497.269l3.01 1.724l-.784-3.377l2.282-2.445l-3.233-.557l-1.745-3.382l-1.644 3.382l-3.381.565l2.274 2.437l-.784 3.377l3.01-1.724C9.658 13.18 10 13 10 13z" />
                </svg>
            </div>
            <div class="card_pref_blur flex flex-col items-center  rounded-2xl p-3">
                <i class="bi bi-hand-thumbs-up bg-[#cf0068] rounded-full"
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
            <div class="card_pref_blur flex flex-col items-center  rounded-2xl p-3">
                <i class="bi bi-heart-pulse bg-[#cf0068] rounded-full"
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

            <div class="card_pref_blur flex flex-col justify-center items-center rounded-2xl p-3">
                <p></p>
                <svg width="80" height="80" viewBox="0 0 24 24" class="text-[#cf0068]">
                    <g fill="none" fill-rule="evenodd">
                        <path
                            d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z" />
                        <path fill="currentColor"
                            d="M9 13a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h4Zm10 0a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h4ZM9 3a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4Zm10 0a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4Z" />
                    </g>
                </svg>
            </div>
            <div class="card_pref_blur flex flex-col items-center rounded-2xl p-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus commodi earum error ad asperiores.
                    Fuga voluptates obcaecati totam quam, vitae porro non quo temporibus adipisci ad dolorem! Quisquam,
                    veritatis ut!</p>
                <svg width="80" height="80" viewBox="0 0 24 24" class="text-[#cf0068]">
                    <path fill="currentColor"
                        d="M3 17.25V21h3.75L17.81 9.93l-3.75-3.75L3 17.25m19.61 1.11l-4.25 4.25l-5.2-5.2l1.77-1.77l1 1l2.47-2.48l1.42 1.42L18.36 17l1.06 1l1.42-1.4l1.77 1.76m-16-7.53L1.39 5.64l4.25-4.25L7.4 3.16L4.93 5.64L6 6.7l2.46-2.48l1.42 1.42l-1.42 1.41l1 1l-2.85 2.78M20.71 7c.39-.39.39-1 0-1.41l-2.34-2.3c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75L20.71 7Z" />
                </svg>
            </div>
            <div class="card_pref_blur flex flex-col items-center rounded-2xl p-3">
                <svg width="80" height="80" viewBox="0 0 512 512" class="text-[#cf0068]">
                    <path fill="currentColor"
                        d="M96 256h32v256H0V352h32v-32h32v-32h32v-32zm416 96v160H384V256h32v32h32v32h32v32h32zM320 64h32v384h-32v-32H192v32h-32V64h32V32h32V0h64v32h32v32zm-32 64h-64v64h64v-64z" />
                </svg>
            </div>
            <div class="card_pref_blur flex flex-col items-center rounded-2xl p-3">
                <svg width="80" height="80" viewBox="0 0 512 512" class="text-[#cf0068]">
                    <path fill="currentColor"
                        d="M96 256h32v256H0V352h32v-32h32v-32h32v-32zm416 96v160H384V256h32v32h32v32h32v32h32zM320 64h32v384h-32v-32H192v32h-32V64h32V32h32V0h64v32h32v32zm-32 64h-64v64h64v-64z" />
                </svg>
            </div>

        </div>
    </section>

    <section class="bento-grid flex flex-col justify-center items-center my-28">
        <h2>Shorten your project times massively, starting today</h2>
        <p>Whether you're working on a small design project or a larger application, Cabana has everything you need to power
            through your projects… fast.</p>
        <div class="content-bento mt-11 max-w-4xl">
            <div class="bentos border border-gray-500  ">
                <h2 class="text-xl font-bold  text-fuchsia-600">Calidad</h2>
                <p>Vivimos en un mundo donde todos dicen que tienen los mejores productos del mercado. Pero una cosa es
                    afirmarlo y la otra es garantizarlo</p>
            </div>
            <div class="bentos border border-gray-500">
                <h2 class="text-xl font-boldorder ">Honestidad</h2>
                <p>La transparencia, sinceridad y franqueza, son valores con las que cuenta Graph Evolutión</p>
            </div>
            <div class="bentos border border-gray-500 ">
                <h2 class="text-xl font-bold ">Pasion</h2>
                <p>Disfrutamos lo que hacemos Por ello, el tener la pasión como uno de nuestro valor los resulatos de
                    nuestro trabajo son satisfactorios para nuestros clientes.</p>
            </div>
            <div class="bentos border border-gray-500 ">
                <p>Lorem, ipsum dolor.</p>
            </div>
            <div class="bentos border border-gray-500 ">
                <p>Lorem, ipsum dolor.</p>
            </div>
            <div class="bentos border border-gray-500 ">
                <p>Lorem, ipsum dolor.</p>
            </div>
            <div class="bentos border border-gray-500 ">
                <p>Lorem, ipsum dolor.</p>
            </div>
        </div>
    </section>
    <section class="content">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner w-full">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="{{ asset('img/carrusel/pr-banner-on.jpg') }}" class="d-block w-auto"
                        alt="Graph Evolution">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="{{ asset('img/carrusel/pr-banner-tw.jpg') }}" class="d-block w-full"
                        alt="Graph Evolution">
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
    <script src="{{ asset('js/hm-reveal.js') }}"></script>
@endsection
