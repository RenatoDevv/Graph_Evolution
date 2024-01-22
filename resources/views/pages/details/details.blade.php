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
                <h4 class="detail-title text-center ">
                    Detalles de <span >{{ $service->title }}</span>
                </h4>
                <p class="services-description mt-2  text-center text-gray-300">
                    Información completa del Servicio.
                </p>
            </div>

                    <p tabindex="0" class="text-center mb-4 text-sm font-normal leading-none text-red-400">El precio especificado no es el definido ya que variara de sus requerimientos del servicio.</p>


            <div class="min-h-full flex items-center  overflow-hidden relative">
                <div
                    class="card-details w-full max-w-5xl rounded-xl shadow-xl p-10 lg:p-20 mx-auto  relative md:text-left">
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
                                <h1 class="detail-title">{{ $service->title }}</h1>
                                <p class="">{{ $service->description }}.</p>
                            </div>
                            <div>
                                <div class="inline-block align-bottom mr-5">
                                    <span class="text-2xl leading-none align-baseline">$</span>
                                    <span
                                        class="font-bold text-5xl leading-none align-baseline">{{ $service->price }}</span>
                                    <span class="text-base leading-none align-baseline">Aproximado</span>
                                </div>
                                <div class="inline-block pt-4">
                                    <a href="{{route('contact')}}" class="btn-select"><i
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
