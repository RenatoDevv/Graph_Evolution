@extends('layout.layout')

@section('title', 'Nosotros')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/about.css') }}">
@endsection
@section('content')
    <x-app>
        <x-section-container class="content-about ">
            <div class="content-about-descripcion">
                <h1 class="content-title">Graph <br> _Evolution</h1>
                <p>Transformando Ideas.
                </p>
            </div>
            <div class="content-image">
                <img src="{{ asset('img/about/galactic.jpg') }}" alt="" width="70%">
            </div>
        </x-section-container>
    </x-app>

    <x-app>
        <x-section-container class="about-biografi d-flex flex-col items-center content">
            <h2 class="aboout-title-b section-subtitle m-0" style="border-bottom: 3px solid white; line-heigth: 20px;">
                Biografia
            </h2>
            <p class="about-description w-auto">Somos una empresa que busca transformar ideas en soluciones visuales,
                fusionando
                la creatividad y el concepto de nuestros clientes.
            </p>
        </x-section-container>
    </x-app>
    <x-app>
        <x-section-container class=" graph-about">
            <div class="about-content on-box">
                <h2 class="section-subtitle">🌟Misión</h2>
                <div class="about-text d-flex">
                    <div class="about-icon yellow-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 20 20">
                            <path fill="currentColor"
                                d="M10.898 2.9a1 1 0 0 0-1.794 0l-1.93 3.91l-4.317.628a1 1 0 0 0-.554 1.706l3.124 3.044l-.738 4.3a1 1 0 0 0 1.451 1.054l3.426-1.801c.16-.4.4-.764.707-1.07l4.829-4.83a2.868 2.868 0 0 1 2.665-.77a1 1 0 0 0-.622-1.633l-4.317-.627zm4.911 7.648l-4.83 4.83a2.197 2.197 0 0 0-.577 1.02l-.375 1.498a.89.89 0 0 0 1.079 1.079l1.498-.375a2.185 2.185 0 0 0 1.02-.578l4.83-4.83a1.87 1.87 0 0 0-2.645-2.644" />
                        </svg>
                    </div>
                    <p class="about-description">Nos esforzamos por cumplir con todas las
                        necesidades y trabajos que nuestros clientes soliciten, nuestro objetivo es brindar productos y
                        servicios de calidad que generen impacto en la comunicación. </p>
                </div>
            </div>
            <div class="about-content tw-box">
                <h2 class="section-subtitle">🌟Vision</h2>
                <div class="about-text d-flex">
                    <div class="about-icon blue-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M3 17.25V21h3.75L17.81 9.93l-3.75-3.75zm19.61 1.11l-4.25 4.25l-5.2-5.2l1.77-1.77l1 1l2.47-2.48l1.42 1.42L18.36 17l1.06 1l1.42-1.4zm-16-7.53L1.39 5.64l4.25-4.25L7.4 3.16L4.93 5.64L6 6.7l2.46-2.48l1.42 1.42l-1.42 1.41l1 1zM20.71 7c.39-.39.39-1 0-1.41l-2.34-2.3c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75z" />
                        </svg>
                    </div>
                    <p class="about-description">Ser una empresa líder que impacte, incursionando en más ramas de la
                        comunicación publicitaria para el progreso de nuestra sociedad.
                    </p>
                </div>
            </div>
            <div class="about-content tr-box">
                <h2 class="section-subtitle">🌟Valores</h2>
                <div class="about-text">
                    <p class="about-description">
                    <ul>
                        <li>✨ Fidelidad</li>
                        <li>✨ Amabilidad</li>
                    </ul>
                    </p>
                    <div class="about-icon green-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 20 20">
                            <path fill="currentColor"
                                d="M10.898 2.9a1 1 0 0 0-1.794 0l-1.93 3.91l-4.317.628a1 1 0 0 0-.554 1.706l3.124 3.044l-.738 4.3a1 1 0 0 0 1.451 1.054l3.426-1.801c.16-.4.4-.764.707-1.07l4.829-4.83a2.868 2.868 0 0 1 2.665-.77a1 1 0 0 0-.622-1.633l-4.317-.627zm4.911 7.648l-4.83 4.83a2.197 2.197 0 0 0-.577 1.02l-.375 1.498a.89.89 0 0 0 1.079 1.079l1.498-.375a2.185 2.185 0 0 0 1.02-.578l4.83-4.83a1.87 1.87 0 0 0-2.645-2.644" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="about-content fr-box">
                <h2 class="section-subtitle">🌟Objetivos</h2>
                <div class="about-text ">
                    <div class="about-icon blue-100-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M3 17.25V21h3.75L17.81 9.93l-3.75-3.75zm19.61 1.11l-4.25 4.25l-5.2-5.2l1.77-1.77l1 1l2.47-2.48l1.42 1.42L18.36 17l1.06 1l1.42-1.4zm-16-7.53L1.39 5.64l4.25-4.25L7.4 3.16L4.93 5.64L6 6.7l2.46-2.48l1.42 1.42l-1.42 1.41l1 1zM20.71 7c.39-.39.39-1 0-1.41l-2.34-2.3c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75z" />
                        </svg>
                    </div>
                    <ul>
                        <li>Poder innovar visualmente todas aquellas ideas que nuestro público tenga.</li>
                        <li>Ser reconocido como una empresa líder en diseño e imprenta a nivel de Arequipa.</li>
                        <li>Abrir más sucursales para poder llegar a más clientes. </li>
                        <li>Brindar trabajos de calidad.</li>
                    </ul>
                </div>
            </div>
        </x-section-container>
    </x-app>

@endsection
@section('scripts')
    <script src="{{ asset('js/ab-an-reveal.js') }}"></script>


@endsection
