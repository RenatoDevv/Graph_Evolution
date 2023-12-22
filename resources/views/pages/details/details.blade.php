@extends('layout.layout')
@section('title', 'Detalle Servicio')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/service.css') }}">
@endsection
@section('content')
    <section class="container services-contaiener w-full  lg:p-5 sm:p-1">
        {{-- <h2 class="services-title text-center font-bold lg:text-6xl sm:text-lg">Detalles del servicio</h2> --}}
        <div class="relative flex h-full w-full flex-col rounded-[20px]  bg-clip-border">
            <div class="mb-8 w-full">
                <h4 class=" text-3xl text-center font-bold text-gray-100 dark:text-white">
                    Detalles de <span class="text-pink-600">{{ $service->title }}</span>
                </h4>
                <p class="services-description mt-2  text-center text-gray-300">
                    Información completa del Servicio.
                </p>
            </div>

            <div class="w-full p-3 mt-4 bg-red-300 rounded flex items-center mb-5">
                <div tabindex="0" aria-label="storage icon" role="img"
                    class="focus:outline-none rounded-full border-red-200 flex items-center flex-shrink-0 justify-center">
                    <svg width="30" height="30" viewBox="0 0 20 20" class="text-red-500">
                        <path fill="currentColor"
                            d="M11.53 2.3A1.85 1.85 0 0 0 10 1.21A1.85 1.85 0 0 0 8.48 2.3L.36 16.36C-.48 17.81.21 19 1.88 19h16.24c1.67 0 2.36-1.19 1.52-2.64zM11 16H9v-2h2zm0-4H9V6h2z" />
                    </svg>
                </div>
                <div class="pl-3 w-full flex items-center justify-between">
                    <p tabindex="0" class="focus:outline-none text-sm font-normal leading-none text-red-700">El precio especificado no es el definido ya que variara de sus requerimientos del servicio.</p>
                </div>
            </div>

            <div class="min-h-full flex items-center  overflow-hidden relative">
                <div
                    class="w-full max-w-5xl rounded-xl bg-[#75757521] shadow-xl p-10 lg:p-20 mx-auto  relative md:text-left">
                    <div class="md:flex items-center -mx-10">
                        <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0">
                            <div class="relative">
                                <img src="{{ asset('storage/' . $service->images_file) }}"
                                    class="w-full relative z-10 rounded" alt="">
                                <div class="border-4 border-yellow-200 absolute top-10 bottom-10 left-10 right-10 z-0">
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 px-10">
                            <div class="mb-10">
                                <h1 class="font-bold uppercase text-2xl mb-4 text-pink-600">{{ $service->title }}</h1>
                                <p class="">{{ $service->description }}.</p>
                            </div>
                            <div>
                                <div class="inline-block align-bottom mr-5">
                                    <span class="text-2xl leading-none align-baseline">$</span>
                                    <span
                                        class="font-bold text-5xl leading-none align-baseline">{{ $service->price }}</span>
                                    <span class="text-base leading-none align-baseline">Aproximado</span>
                                </div>
                                <div class="inline-block align-bottom">
                                    <a href="{{route('contact')}}" class="section-button rounded-full px-10 font-semibold mt-4"><i
                                            class="mdi mdi-cart -ml-2 mr-2"></i> Contratar Ahora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

@endsection
@section('scripts')
    <script src="{{ asset('js/src-reveal.js') }}"></script>
@endsection
