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
        <div class="content-image">
            <img src="{{ asset('img/about/galactic.jpg') }}" alt="" width="70%">
        </div>
    </section>
    <div class="about-biografi d-flex">
        <h2 class="aboout-title-b" style="border-bottom: 3px solid white; line-heigth: 20px;">Biografia </h2>
        <p class="about-description w-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum neque non illo
            blanditiis <br> ex
            quae quod vitae
            tempora pariatur cumque porro, cupiditate maxime suscipit <br> reprehenderit velit in quibusdam nobis
            voluptatum!
        </p>
    </div>
    <section class="graph-about">
        <div class="about-content on-box">
            <h2 class="about-title">🌟Misión</h2>
            <div class="about-text d-flex">
                <div>
                    <img src="{{ asset('img/about/mision_graph_evolution.jpg') }}" alt="mision Graph Evolition"
                        class="rounded-lg w-full object-cover">
                </div>
                <p class="about-description">Somos una empresa que busca transformar ideas en soluciones visuales,
                    fusionando la creatividad y el concepto de nuestros clientes. Nos esforzamos por cumplir con todas las
                    necesidades y trabajos que nuestros clientes soliciten, nuestro objetivo es brindar productos y
                    servicios de calidad que generen impacto en la comunicación. </p>
            </div>
        </div>
        <div class="about-content tw-box">
            <h2 class="about-title">🌟Vision</h2>
            <div class="about-text d-flex">
                <div>
                    <img src="{{ asset('img/about/vision_graph_evolution.jpg') }}" alt=""
                        title="vision Graph Evolution" class="w-full">
                </div>
                <p class="about-description">Ser una empresa líder que impacte, incursionando en más ramas de la
                    comunicación publicitaria para el progreso de nuestra sociedad.
                </p>
            </div>
        </div>
        <div class="about-content tr-box">
            <h2 class="about-title text-center">🌟Valores</h2>
            <div class="about-text">
                <p class="about-description">
                <ul>
                    <li>✨ Fidelidad</li>
                    <li>✨ Amabilidad</li>
                </ul>
                </p>
                <img src="{{ asset('img/about/valores.png') }}" alt="valores graph evolution" class="w-full">
            </div>
        </div>
        <div class="about-content fr-box">
            <h2 class="text-center">🌟Objetivos</h2>
            <div class="about-text ">
                <img src="{{ asset('img/about/objetivos.png') }}" alt="objetivos graph evolution" class="w-full">
                <ul>
                    <li>Poder innovar visualmente todas aquellas ideas que nuestro público tenga.</li>
                    <li>Ser reconocido como una empresa líder en diseño e imprenta a nivel de Arequipa.</li>
                    <li>Abrir más sucursales para poder llegar a más clientes. </li>
                    <li>Brindar trabajos de calidad.</li>
                </ul>
            </div>
        </div>
    </section>

@endsection
@section('scripts')
    <script src="{{ asset('js/ab-an-reveal.js') }}"></script>


@endsection
