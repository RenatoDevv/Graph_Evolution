@extends('layout.layout')

@section('title', 'Nosotros')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/about.css') }}">
@endsection
@section('content')
    <section class="content-about">
        <div class="content-about-descripcion">
            <h1 class="content-title">Graph <br> _Evolution</h1>
            <div class="content-description">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, similique in dicta enim illum atque
                    porro. reiciendis dicta ad nihil. Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
        <div class="content-image" style="width: 40%">
            <img src="{{ asset('img/about/galactic.jpg') }}" alt="" width="100%">
        </div>
    </section>
    <div class="about-biografi d-flex">
        <h2 style="border-bottom: 3px solid white; line-heigth: 20px;">Biografia </h2>
        <p class="w-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum neque non illo blanditiis <br> ex
            quae quod vitae
            tempora pariatur cumque porro, cupiditate maxime suscipit <br> reprehenderit velit in quibusdam nobis
            voluptatum!
        </p>
    </div>
    <section class="graph-about">
        <div class="about-content">
            <h2 class="about-title">Misión</h2>
            <div class="about-text d-flex">
                <img src="{{ asset('img/about/mision.png') }}" alt="MISION Graph Evolition" width="100%"
                    style="object-fit: cover; max-width: 100%;">
                <p class="about-description">Somos una empresa que busca transformar ideas en soluciones visuales,
                    fusionando la creatividad y el concepto de nuestros clientes. Nos esforzamos por cumplir con todas las
                    necesidades y trabajos que nuestros clientes soliciten, nuestro objetivo es brindar productos y
                    servicios de calidad que generen impacto en la comunicación. </p>
            </div>
        </div>
        <div class="about-content">
            <h2 class="about-title">Vision</h2>
            <div class="about-text d-flex">
                <img src="{{ asset('img/about/vision.png') }}" alt="" title="VISION Graph Evolution" width="100%">
                <p class="about-description">Ser una empresa líder que impacte, incursionando en más ramas de la
                    comunicación publicitaria para el progreso de nuestra sociedad.
                </p>
            </div>
        </div>
        <div class="about-content">
            <h2 class="about-title text-center">Valores</h2>
            <div class="about-text">
                <p class="about-description">
                <ul>
                    <li>Fidelidad</li>
                    <li>Amabilidad</li>
                </ul>
                </p>
                <img src="{{ asset('img/about/valores.png') }}" alt="" width="100%">
            </div>
        </div>
        <div class="about-content">
            <h2 class="text-center">Objetivos</h2>
            <div class="about-text ">
                <img src="{{ asset('img/about/objetivos.png') }}" alt="" width="100%">
                <ul>
                    <li>Poder innovar visualmente todas aquellas ideas que nuestro público tenga.</li>
                    <li>Ser reconocido como una empresa líder en diseño e imprenta a nivel de Arequipa.</li>
                    <li>Abrir más sucursales para poder llegar a más clientes. </li>
                    <li>Brindar trabajos de calidad.</li>
                </ul>
            </div>
        </div>
    </section>
    <button type="button g" class="wathc-video btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Ver Video
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-none">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel h-bold">Graph Evolution</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('img/video.png') }}" alt="" class="cursor-pointer" width="100%">
                </div>
                <div class="modal-footer text-center">
                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button> --}}
                    <p class="text-center">Copyrigth &copy; 2023 Graph Evolution todos los derechos reservados</p>
                </div>
            </div>
        </div>
    </div>

@endsection
