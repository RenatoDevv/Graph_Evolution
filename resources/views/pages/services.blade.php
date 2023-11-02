@extends('layout.layout')
@section('title', 'Servicios')
@section('css')
    <style>
        .container {
            max-width: 55rem;
            width: auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 100px;
            margin-bottom: 50px;
            gap: 20px;
        }

        .services-contaiener {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-bottom: 100px;
        }

        .services-contaiener .container-items {
            width: 350px;
            /* background: #4948499f; */
            filter: grayscale(0.1);
            border-radius: 20px;
            /* box-shadow: 0px 8px 24px #cf00be67; */
            padding: 25px;
            transition: .3 ease;
        }

        .services-contaiener .container-items:hover {
            cursor: pointer;
            transform: scale(1.1);
            box-shadow: 0px 8px 24px #13121367;
        }
    </style>
@endsection
@section('content')
    <section class="container services-contaiener w-full  lg:p-5 sm:p-1">
        <h2 class="text-center font-bold lg:text-6xl sm:text-lg" >Explore nuestros servicios</h2>
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
                <div class="flex w-full items-center justify-between rounded-2xl bg-white p-3 shadow-md  dark:shadow-none">
                    <div class="flex items-center">
                        <div class="">
                            <img class="h-[83px] w-[83px] rounded-lg"
                                src="https://github.com/horizon-ui/horizon-tailwind-react-ts-corporate/blob/main/src/assets/img/profile/image1.png?raw=true"
                                alt="" />
                        </div>
                        <div class="ml-4">
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                Technology behind the Blockchain
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Project #1 .
                                <a class="ml-1 font-medium text-brand-500 hover:text-brand-500 dark:text-white"
                                    href=" ">
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
                    class="flex w-full items-center justify-between rounded-2xl bg-white p-3 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <div class="flex items-center">
                        <div class="">
                            <img class="h-[83px] w-[83px] rounded-lg"
                                src="https://github.com/horizon-ui/horizon-tailwind-react-ts-corporate/blob/main/src/assets/img/profile/image2.png?raw=true"
                                alt="" />
                        </div>
                        <div class="ml-4">
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                Technology behind the Blockchain
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Project #1 .
                                <a class="ml-1 font-medium text-brand-500 hover:text-brand-500 dark:text-white"
                                    href=" ">
                                    See product details
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
                    class="flex w-full items-center justify-between rounded-2xl bg-white p-3 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <div class="flex items-center">
                        <div class="">
                            <img class="h-[83px] w-[83px] rounded-lg"
                                src="https://github.com/horizon-ui/horizon-tailwind-react-ts-corporate/blob/main/src/assets/img/profile/image3.png?raw=true"
                                alt="" />
                        </div>
                        <div class="ml-4">
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                Technology behind the Blockchain
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Project #1 .
                                <a class="ml-1 font-medium text-brand-500 hover:text-brand-500 dark:text-white"
                                    href=" ">
                                    See product details
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
                    class="flex w-full items-center justify-between rounded-2xl bg-white p-3 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <div class="flex items-center">
                        <div class="">
                            <img class="h-[83px] w-[83px] rounded-lg"
                                src="https://github.com/horizon-ui/horizon-tailwind-react-ts-corporate/blob/main/src/assets/img/profile/image3.png?raw=true"
                                alt="" />
                        </div>
                        <div class="ml-4">
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                Technology behind the Blockchain
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Project #1 .
                                <a class="ml-1 font-medium text-brand-500 hover:text-brand-500 dark:text-white"
                                    href=" ">
                                    See product details
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
                    class="flex w-full items-center justify-between rounded-2xl bg-white p-3 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <div class="flex items-center">
                        <div class="">
                            <img class="h-[83px] w-[83px] rounded-lg"
                                src="https://github.com/horizon-ui/horizon-tailwind-react-ts-corporate/blob/main/src/assets/img/profile/image3.png?raw=true"
                                alt="" />
                        </div>
                        <div class="ml-4">
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                Technology behind the Blockchain
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Project #1 .
                                <a class="ml-1 font-medium text-brand-500 hover:text-brand-500 dark:text-white"
                                    href=" ">
                                    See product details
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
                    class="flex w-full items-center justify-between rounded-2xl bg-white p-3 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <div class="flex items-center">
                        <div class="">
                            <img class="h-[83px] w-[83px] rounded-lg"
                                src="https://github.com/horizon-ui/horizon-tailwind-react-ts-corporate/blob/main/src/assets/img/profile/image3.png?raw=true"
                                alt="" />
                        </div>
                        <div class="ml-4">
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                Technology behind the Blockchain
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Project #1 .
                                <a class="ml-1 font-medium text-brand-500 hover:text-brand-500 dark:text-white"
                                    href=" ">
                                    See product details
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
                    class="flex w-full items-center justify-between rounded-2xl bg-white p-3 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <div class="flex items-center">
                        <div class="">
                            <img class="h-[83px] w-[83px] rounded-lg"
                                src="https://github.com/horizon-ui/horizon-tailwind-react-ts-corporate/blob/main/src/assets/img/profile/image3.png?raw=true"
                                alt="" />
                        </div>
                        <div class="ml-4">
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                Technology behind the Blockchain
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Project #1 .
                                <a class="ml-1 font-medium text-brand-500 hover:text-brand-500 dark:text-white"
                                    href=" ">
                                    See product details
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
                    class="flex w-full items-center justify-between rounded-2xl bg-white p-3 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <div class="flex items-center">
                        <div class="">
                            <img class="h-[83px] w-[83px] rounded-lg"
                                src="https://github.com/horizon-ui/horizon-tailwind-react-ts-corporate/blob/main/src/assets/img/profile/image3.png?raw=true"
                                alt="" />
                        </div>
                        <div class="ml-4">
                            <p class="text-base font-medium text-navy-700 dark:text-white">
                                Technology behind the Blockchain
                            </p>
                            <p class="mt-2 text-sm text-gray-600">
                                Project #1 .
                                <a class="ml-1 font-medium text-brand-500 hover:text-brand-500 dark:text-white"
                                    href=" ">
                                    See product details
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
