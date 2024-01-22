@extends('layout.layout')
@section('title', 'Servicios')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/service.css') }}">
@endsection
@section('content')
    <x-app>
        <x-section-container class="my-5 ">
            <div class="relative flex h-full w-full flex-col rounded-[20px]  bg-clip-border lg:p-4  sm:p-0">
                <div class="mb-8 w-full">
                    <h4 class="services-subtitle text-center">
                        Todos los Servicios
                    </h4>
                    <p class="services-description mt-2 text-lg text-center text-gray-300">
                        Explore todos los servicos registrados.
                    </p>
                </div>
                <div class="srv-content-cards flex flex-wrap gap-5 justify-center m-auto">
                    {{-- @foreach ($services as $service)
                        <x-ui.card-service class="w-80 2xl:w-96">
                            <x-slot name="title">{{ $service->title }}</x-slot>
                            <x-slot name="image_file">
                                <img class="w-full h-40 rounded-xl  overflow-hidden object-cover object-center 2xl:h-56"
                                    src="{{ asset('storage/' . $service->images_file) }}" alt="">
                            </x-slot>
                            <x-slot name="description">{{ $service->description }}</x-slot>
                            <x-slot name="price">{{ $service->price }}</x-slot>
                            <x-slot name="link">
                                <a href="{{ route('detail', $service->id) }}" class="section-button w-full">
                                    Ver Ahora
                                </a>
                            </x-slot>
                        </x-ui.card-service>
                    @endforeach --}}
                    <article class="services-cards">
                        @foreach ($services as $item)
                            <div class="services-card">
                                <img class="card-img" src="{{ asset('storage/' . $item->images_file) }}" alt="">
                                <div class="card-info">
                                    <div>
                                        <h2 class="card-title">{{ $item->title }}</h2>
                                        <p class="card-description">
                                            {{ Str::limit($item->description, '41') }}
                                        </p>
                                    </div>
                                    <a href="{{ route('detail', $item->id) }}" class="btn-unselect">
                                        <svg width="11" height="18" viewBox="0 0 11 18" fill="none">
                                            <path d="M1.7 0L0.300003 1.5L7.7 9L0.300003 16.5L1.7 18L10.7 9L1.7 0Z"
                                                fill="currentColor" />
                                        </svg>

                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </article>
                </div>
            </div>
        </x-section-container>
    </x-app>

@endsection
@section('scripts')
    <script src="{{ asset('js/src-reveal.js') }}"></script>
@endsection
