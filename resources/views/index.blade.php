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
            <img src="{{ asset('img/home-derecha.png') }}" alt="" width="100%">
        </div>

    </section>

    <section class="home-services d-flex flex-column align-items-center" id="services">
        <div class="ArrowFloat">
            <a href="#services"><i class="bi bi-arrow-down"></i></a>
        </div>
        <h2 class="services-title fw-bold">Servicios</h2>
        <p class="services-description text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. A nisi <br>
            sapiente autem natus amet
            commodi laboriosam fuga facere, ex doloribus.</p>
        <div class="grid justify-center w-auto gap-4 sm:flex-col md:grid-col-1 lg:grid-cols-4">
            <div class="relative flex w-80 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md h-auto">
                <div class="relative mx-4 mt-4 h-52 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700">
                    <img src="https://images.unsplash.com/photo-1629367494173-c78a56567877?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=927&amp;q=80"
                        class="h-full w-full object-cover" />
                </div>
                <div class="p-6 ">
                    <div class="mb-2 flex items-center justify-between">
                        <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                            Apple AirPods
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
                <div class="p-6 pt-0 ">
                    <button
                        class="w-full rounded-lg bg-gray-300 py-3 px-6 text-center font-sans text-xs font-bold uppercase text-gray-900 transition-all hover:scale-105  hover:bg-fuchsia-600 hover:text-white"
                        type="button">
                        Ver Ahora
                    </button>
                </div>
            </div>
            <div class="relative flex w-80 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                <div class="relative mx-4 mt-4 h-52 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700">
                    <img src="https://images.unsplash.com/photo-1629367494173-c78a56567877?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=927&amp;q=80"
                        class="h-full w-full object-cover" />
                </div>
                <div class="p-6">
                    <div class="mb-2 flex items-center justify-between">
                        <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                            Apple AirPods
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
                <div class="p-6 pt-0">
                    <button
                        class=" bg-gray-300 w-full rounded-lg bg-blue-gray-900/10 py-3 px-6 text-center font-sans text-xs font-bold uppercase text-gray-900 transition-all hover:scale-105  hover:bg-fuchsia-600 hover:text-white"
                        type="button">
                        Ver Ahora
                    </button>
                </div>
            </div>
            <div class="relative flex w-80 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                <div class="relative mx-4 mt-4 h-52 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700">
                    <img src="https://images.unsplash.com/photo-1629367494173-c78a56567877?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=927&amp;q=80"
                        class="h-full w-full object-cover" />
                </div>
                <div class="p-6">
                    <div class="mb-2 flex items-center justify-between">
                        <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                            Apple AirPods
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
                <div class="p-6 pt-0">
                    <button
                        class="bg-gray-300 w-full rounded-lg bg-blue-gray-900/10 py-3 px-6 text-center font-sans text-xs font-bold uppercase text-gray-900 transition-all hover:scale-105  hover:bg-fuchsia-600 hover:text-white"
                        type="button">
                        Ver Ahora
                    </button>
                </div>
            </div>
            <div class="relative flex w-80 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                <div class="relative mx-4 mt-4 h-52 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700">
                    <img src="https://images.unsplash.com/photo-1629367494173-c78a56567877?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=927&amp;q=80"
                        class="h-full w-full object-cover" />
                </div>
                <div class="p-6">
                    <div class="mb-2 flex items-center justify-between">
                        <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                            Apple AirPods
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
                <div class="p-6 pt-0">
                    <button
                        class="bg-gray-300 w-full rounded-lg bg-blue-gray-900/10 py-3 px-6 text-center font-sans text-xs font-bold uppercase text-gray-900 transition-all hover:scale-105  hover:bg-fuchsia-600 hover:text-white"
                        type="button">
                        Ver Ahora
                    </button>
                </div>
            </div>
        </div>
        {{-- <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" /> --}}
    </section>
    <section class="home-preference  d-flex flex-column align-items-center">
        <h2 class="mb-5 fs-1 fw-bold mt-5" style="color: #cf00be">Porque elegirnos?</h2>
        <div class="d-flex justify-content-center gap-5 w-75 flex-wrap mt-5">
            <div class="card d-flex flex-column align-items-center pt-4 bg-transparent" style="width: 23rem;">
                <i class="bi bi-trophy"
                    style="padding: 20px 35px; background:#cf00bee8; box-shadow: 0 0 0 10px #cf00be21, 0 0 50px #cf00be83, 0 0 100px #cf00be83; border-radius:50%;font-size: 50px;"></i>
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                    <h5 class="card-title text-center fs-3">Calidad</h5>
                    <p class="card-text text-center fs-4">Vivimos en un mundo donde todos dicen que tienen los mejores
                        productos del mercado. Pero una cosa es afirmarlo y la otra es garantizarlo</p>
                </div>
            </div>
            <div class="card d-flex flex-column align-items-center pt-4 bg-transparent" style="width: 23rem;">
                <i class="bi bi-rocket"
                    style="padding: 20px 33px; background:#cf00bec2; box-shadow: 0 0 0 10px #cf00be21, 0 0 50px #cf00be83, 0 0 100px #cf00be83; border-radius:50%; font-size: 50px;"></i>
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                    <h5 class="card-title text-center fs-3">Honestidad</h5>
                    <p class="card-text text-center fs-4">La<strong> transparencia, sinceridad y franqueza,</strong> son
                        valores con las que cuenta Graph Evolutión</p>
                </div>
            </div>
            <div class="card d-flex flex-column align-items-center pt-4 bg-transparent" style="width: 23rem;">
                <i class="bi bi-heart-pulse"
                    style="padding: 20px 35px; background:#cf00bec2; box-shadow: 0 0 0 10px #cf00be21, 0 0 50px #cf00be83, 0 0 100px #cf00be83; border-radius:50%; font-size: 50px;"></i>
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                    <h5 class="card-title text-center fs-3">Pasión</h5>
                    <p class="card-text text-center fs-4">Disfrutamos lo que hacemos Por ello, el tener la
                        <strong>pasión</strong> como uno de nuestro valor los resulatos de nuestro trabajo son
                        satisfactorios para nuestros clientes.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="p-5">
        <h2 class="fw-bold text-center mb-4" style="color: #cf00be; font-size: 50px;">Nestros Trabajos</h2>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="{{ asset('img/fondo.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="{{ asset('img/banner1.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="{{ asset('img/ps.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="{{ asset('img/banner2.png') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section>
        <p>Hola Mundo</p>
    </section>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Abrir Modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('img/fondo.jpg') }}" alt="" width="100%">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
