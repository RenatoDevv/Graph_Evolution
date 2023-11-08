@extends('layout.layout')
@section('title', 'Servicios')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/service.css') }}">
@endsection
@section('content')
    <section class="container services-contaiener w-full  lg:p-5 sm:p-1">
        <h2 class="text-center font-bold lg:text-6xl sm:text-lg">Explore nuestros servicios</h2>
        <div
            class="relative flex h-full w-full flex-col rounded-[20px]  bg-clip-border lg:p-4  shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:shadow-none sm:p-0">
            <div class="mb-8 w-full">
                <h4 class="text-3xl font-bold text-gray-100 dark:text-white">
                    Todos los Servicios
                </h4>
                <p class="services-description mt-2 text-2lg text-gray-300">
                    Here you can find more details about your projects. Keep you user
                    engaged by providing meaningful information.
                </p>
            </div>
            <div class="grid lg:grid-cols-3 py-4 gap-x-4 gap-y-3 justify-between sm:grid-cols-1">
                <div class="flex w-full items-center justify-between rounded-2xl bg-white p-2 shadow-md  dark:shadow-none">
                    <div class="flex items-center">
                        <div class="">

                            <img src="{{ asset('img/services/card_services.jpg') }}" alt=""
                                class="h-[100px] w-[100px] rounded-lg">
                        </div>
                        <div class="ml-4">
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                Impresion de Banners
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Calidad
                                <a class="ml-1 font-medium text-brand-500 hover:text-brand-500 dark:text-white"
                                    href="{{ route('contact') }}">
                                    Contactar Ahora
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="mr-4 flex items-center justify-center text-gray-600 dark:text-white">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path
                                d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 5.63l-2.34-2.34a.996.996 0 00-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83a.996.996 0 000-1.41z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div
                    class="flex w-full items-center justify-between rounded-2xl bg-white p-2 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <div class="flex items-center">
                        <div class="">
                            <img src="{{ asset('img/services/diseño_services.jpg') }}" alt=""
                                class="h-[100px] w-[100px] rounded-lg">
                        </div>
                        <div class="ml-4">
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                Diseño de Logos
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Project #1 .
                                <a class="ml-1 font-medium text-brand-500 hover:text-brand-500 dark:text-white"
                                    href="{{ route('contact') }}">
                                    Contactar Ahora
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="mr-4 flex items-center justify-center text-gray-600 dark:text-white">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path
                                d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 5.63l-2.34-2.34a.996.996 0 00-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83a.996.996 0 000-1.41z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div
                    class="flex w-full items-center justify-between rounded-2xl bg-white p-2 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <div class="flex items-center">
                        <div class="">
                            <img class="h-[100px] w-[100px] rounded-lg"
                                src="{{ asset('img/services/card_services_1.jpg') }}" alt="" />
                        </div>
                        <div class="ml-4">
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                Technology behind the Blockchain
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Project #1 .
                                <a class="ml-1 font-medium text-brand-500 hover:text-brand-500 dark:text-white"
                                    href="{{ route('contact') }}">
                                    Contactar Ahora
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="mr-4 flex items-center justify-center text-gray-600 dark:text-white">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path
                                d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 5.63l-2.34-2.34a.996.996 0 00-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83a.996.996 0 000-1.41z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div
                    class="flex w-full items-center justify-between rounded-2xl bg-white p-2 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <div class="flex items-center">
                        <div class="">
                            <img class="h-[100px] w-[100px] rounded-lg" src="{{ asset('img/services/logo_services.jpg') }}"
                                alt="" />
                        </div>
                        <div class="ml-4">
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                Technology behind the Blockchain
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Project #1 .
                                <a class="ml-1 font-medium text-brand-500 hover:text-brand-500 dark:text-white"
                                    href="{{ route('contact') }}">
                                    Contactar Ahora
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="mr-4 flex items-center justify-center text-gray-600 dark:text-white">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                            width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path
                                d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 5.63l-2.34-2.34a.996.996 0 00-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83a.996.996 0 000-1.41z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div
                    class="flex w-full items-center justify-between rounded-2xl bg-white p-2 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <div class="flex items-center">
                        <div class="">
                            <img class="h-[100px] w-[100px] rounded-lg"
                                src="{{ asset('img/services/banner_services.jpg') }}" alt="" />
                        </div>
                        <div class="ml-4">
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                Technology behind the Blockchain
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Project #1 .
                                <a class="ml-1 font-medium text-brand-500 hover:text-brand-500 dark:text-white"
                                    href="{{ route('contact') }}">
                                    Contactar Ahora
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="mr-4 flex items-center justify-center text-gray-600 dark:text-white">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path
                                d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 5.63l-2.34-2.34a.996.996 0 00-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83a.996.996 0 000-1.41z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div
                    class="flex w-full items-center justify-between rounded-2xl bg-white p-2 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <div class="flex items-center">
                        <div class="">
                            <img class="h-[100px] w-[100px] rounded-lg"
                                src="{{asset('img/services/fly_services.jpg')}}"
                                alt="" />
                        </div>
                        <div class="ml-4">
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                Technology behind the Blockchain
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Project #1 .
                                <a class="ml-1 font-medium text-brand-500 hover:text-brand-500 dark:text-white"
                                    href="{{ route('contact') }}">
                                    Contactar Ahora
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="mr-4 flex items-center justify-center text-gray-600 dark:text-white">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path
                                d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 5.63l-2.34-2.34a.996.996 0 00-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83a.996.996 0 000-1.41z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div
                    class="flex w-full items-center justify-between rounded-2xl bg-white p-2 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <div class="flex items-center">
                        <div class="">
                            <img class="h-[100px] w-[100px] rounded-lg"
                                src="{{ asset('img/services/banner_servicios.jpg')}}"
                                alt="" />
                        </div>
                        <div class="ml-4">
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                Technology behind the Blockchain
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Project #1 .
                                <a class="ml-1 font-medium text-brand-500 hover:text-brand-500 dark:text-white"
                                    href="{{ route('contact') }}">
                                    Contactar Ahora
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="mr-4 flex items-center justify-center text-gray-600 dark:text-white">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path
                                d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 5.63l-2.34-2.34a.996.996 0 00-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83a.996.996 0 000-1.41z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div
                    class="flex w-full items-center justify-between rounded-2xl bg-white p-2 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <div class="flex items-center">
                        <div class="">
                            <img class="h-[100px] w-[100px] rounded-lg"
                                src="{{ asset('img/services/banner_servicios3.jpg')}}"
                                alt="" />
                        </div>
                        <div class="ml-4">
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                Technology behind the Blockchain
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Project #1 .
                                <a class="ml-1 font-medium text-brand-500 hover:text-brand-500 dark:text-white"
                                    href="{{ route('contact') }}">
                                    Contactar Ahora
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="mr-4 flex items-center justify-center text-gray-600 dark:text-white">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path
                                d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 5.63l-2.34-2.34a.996.996 0 00-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83a.996.996 0 000-1.41z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
