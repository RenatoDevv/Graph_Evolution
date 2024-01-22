@extends('layout.layout')
@section('title', 'Servicios')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/service.css') }}">
@endsection
@section('content')
    <x-app>
        <x-section-container>
            <div class="flex flex-col items-center">
                <h2 class="font-bold text-5xl mt-5 tracking-tight">
                    Preguntas Frecuentes
                </h2>
                <p class="text-neutral-300 text-xl mt-3">
                    Resuelva sus dudas
                </p>
            </div>
        </x-section-container>

    </x-app>
    <x-app>
        <x-section-container>
            <div class="w-full mx-auto px-5 bg-transparent ">
                <div class="grid divide-y divide-neutral-500 max-w-3xl mx-auto mt-8 transition-all">
                    <div class="py-5">
                        @foreach ($supports as $support)
                            <details class="group">
                                <summary
                                    class="flex accordion transition justify-between items-center font-medium cursor-pointer list-none">
                                    <span class="mb-2">{{$support->title}}</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="text-neutral-400 text-base mt-3 mb-2 group-open:animate-fadeIn transition">
                                    {{$support->description}}
                                </p>
                            </details>
                        @endforeach
                    </div>
                    {{-- <div class="py-5">
                        <details class="group">
                            <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                <span>Cómo se comunicarán el progreso del proyecto si contrataste ?</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="text-neutral-400 mt-3 group-open:animate-fadeIn">
                                Pronto estara disponible las respuestas de las preguntas.
                        </details>
                    </div>
                    <div class="py-5">
                        <details class="group">
                            <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                <span>Al contratar un servicio sino tengo diseño incluye ello ?</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="text-neutral-400 mt-3 group-open:animate-fadeIn">
                                Pronto estara disponible las respuestas de las preguntas.
                            </p>
                        </details>
                    </div> --}}

                </div>
            </div>
        </x-section-container>
    </x-app>

@endsection
