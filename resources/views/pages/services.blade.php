@extends('layout.layout')
@section('title', 'Servicios')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/service.css') }}">
@endsection
@section('content')
    <section class="container services-contaiener w-full  lg:p-5 sm:p-1">
        <h2 class="services-title text-center font-bold lg:text-6xl sm:text-lg">Explore nuestros servicios</h2>
        <div class="relative flex h-full w-full flex-col rounded-[20px]  bg-clip-border lg:p-4  sm:p-0">
            <div class="mb-8 w-full">
                <h4 class="services-subtitle text-3xl text-center font-bold text-gray-100 dark:text-white">
                    Todos los Servicios
                </h4>
                <p class="services-description mt-2 text-2lg text-center text-gray-300">
                    Here you can find more details about your projects. Keep you user
                    engaged by providing meaningful information.
                </p>
            </div>
            <div class="srv-content-cards flex flex-wrap gap-5 justify-center m-auto">
                @foreach ($services as $service)
                    <div
                        class="max-w-sm bg-[#75757521] px-6 pt-6 pb-2 rounded-xl transform hover:scale-105 transition duration-500 hover:bg-[#75757548]">
                        <h3 class="mb-3 text-xl font-bold text-orange-500">{{ $service->title }}</h3>
                        <div class="relative">
                            <img class="w-80 h-56 rounded-xl  overflow-hidden object-cover object-center"
                                src="{{ asset('storage/' . $service->images_file) }}" alt="">
                            <p class="absolute top-0 bg-[#cf0068] py-1 px-3 rounded-br-lg rounded-tl-lg">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="m5.8 21l1.6-7L2 9.2l7.2-.6L12 2l2.8 6.6l7.2.6l-3.2 2.8H18c-.7 0-1.4.1-2.1.4l2.2-1.9l-4.4-.4l-1.7-4l-1.7 4l-4.4.4l3.3 2.9l-1 4.3l3.8-2.3l.5.3c-.2.5-.4 1.1-.4 1.6L5.8 21M17 14v3h-3v2h3v3h2v-3h3v-2h-3v-3h-2Z" />
                                </svg>
                            </p>
                        </div>
                        <h1 class="mt-2 text-[#fff] text-xl font-semibold cursor-pointer">
                            {{ Str::limit($service->description, '70') }}</h1>
                        <div class="my-3">
                            <div class="flex space-x-1 items-center">
                                <span>
                                    <svg class="h-6 w-6 text-orange-500 mb-1.5" viewBox="0 0 16 16">
                                        <path fill="currentColor"
                                            d="M12.32 8a3 3 0 0 0-2-.7H5.63A1.59 1.59 0 0 1 4 5.69a2 2 0 0 1 0-.25a1.59 1.59 0 0 1 1.63-1.33h4.62a1.59 1.59 0 0 1 1.57 1.33h1.5a3.08 3.08 0 0 0-3.07-2.83H8.67V.31H7.42v2.3H5.63a3.08 3.08 0 0 0-3.07 2.83a2.09 2.09 0 0 0 0 .25a3.07 3.07 0 0 0 3.07 3.07h4.74A1.59 1.59 0 0 1 12 10.35a1.86 1.86 0 0 1 0 .34a1.59 1.59 0 0 1-1.55 1.24h-4.7a1.59 1.59 0 0 1-1.55-1.24H2.69a3.08 3.08 0 0 0 3.06 2.73h1.67v2.27h1.25v-2.27h1.7a3.08 3.08 0 0 0 3.06-2.73v-.34A3.06 3.06 0 0 0 12.32 8z" />
                                    </svg>
                                </span>
                                <p>{{ $service->price }}</p>
                            </div>
                            <div class="w-full flex items-center pt-3">
                                <a href="{{ route('services') }}"
                                    class="text-xl text-center w-full text-white bg-[#cf0068] py-2 rounded-xl shadow-lg hover:bg-[#cf0068b7]">
                                    Ver Ahora
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
@section('scripts')
    <script src="{{ asset('js/src-reveal.js') }}"></script>
@endsection
