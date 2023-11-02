@extends('layout.layout')

@section('title', 'Nosotros')
@section('css')
    <style>
        .content-about {
            width: 100%;
            margin-top: 100px;
            display: flex;
        }

        .content-about .content-about-descripcion {
            margin-right: 100px;
            width: 50%;
            display: flex;
            flex-direction: column;
            gap: 3.125em;
        }

        .content-about .content-description {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
            gap: 20px;
        }

        .content-about .content-title {
            font-weight: 700;
            font-size: 100px;
            line-height: 100px;
        }

        .content-about .content-icons {
            margin-bottom: 30px;
        }

        .about-biografi {
            margin: 150px 0;
            gap: 200px;
        }

        section .wathc-video {
            background: #a71582;
            border-radius: 20px;
            padding: 15px 60px;
            border: none;
            transition: .3s ease;
            font-size: 20px;
        }

        section .wathc-video:hover {
            background: transparent;
            border: 1px solid #a71582;
        }

        .graph-about {
            padding: 0 0;
            display: flex;
            flex-direction: column;
            gap: 190px;
            margin: 150px 0;
        }

        .graph-about .about-content {
            display: flex;
            justify-content: space-between;
            gap: 280px;
        }

        .graph-about .about-content .about-text img {
            background-position: center;
            background-size: cover;
        }

        .graph-about .about-content .about-text {
            display: flex;
            gap: 50px;
            margin-right: 70px;
        }

        .graph-about .about-content .about-text .about-title {
            font-size: 30px;
            font-weight: bold;
            gap: 200px;
        }

        .graph-about .about-content .about-text .about-description {
            /* font-size: 18px; */
        }

        .graph-about .about-content img {
            height: auto;
            background-size: cover;
        }

        .modal-content {
            box-shadow: 0 1px 50px 1px #a715835e;
        }

        @media only screen and (max-width: 1200px) {
            body {
                font-size: 0.7em;
            }

            .content-about {
                background: transparent;
            }

            .about-content .about-text {
                gap: 100px;
            }

            .graph-about .about-content {
                gap: 140px;
            }

            .graph-about .about-content .about-text {
                gap: 25px;
                margin-right: 30px;
            }
        }

        @media only screen and (max-width: 700px) {
            .content-about {
                background: #000;
                width: 100%;
                flex-direction: column;
                align-items: center;
                margin-top: 100px;
                justify-content: space-between;
            }

            .content-about .content-about-descripcion {
                width: 100%;
                margin-right: 0px;
                gap: 10px;
            }

            .content-about .content-title {
                font-weight: 700;
                font-size: 50px;
                line-height: 50px;
            }

            .about-biografi {
                gap: 50px;
            }

            .graph-about {
                background: #a71582;
            }

            .graph-about .about-content .about-text {
                background: #b44a4a;
                flex-direction: column;
                gap: 10px;
            }

            .graph-about .about-content {
                gap: 70px;
            }

            .graph-about .about-content .about-text {
                gap: 25px;
                margin-right: 30px;
            }
        }
    </style>
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
        <div class="" style="width: 40%">
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
