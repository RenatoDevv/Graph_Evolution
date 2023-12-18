<div class="flex flex-col p-2 lg:p-8 dark:bg-[#313a46]  dark:via-transparent  gap-3 relative">
    {{-- <h1 class="text-3xl font-bold text-center text-gray-800 dark:text-gray-300">👋 Bienvenido al panel de Administrador
    </h1>
    <p class="text-center text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi nobis voluptas
        ullam,
        perferendis in enim at
        quaerat maxime placeat! Cumque libero aliquid omnis cupiditate necessitatibus voluptatem iure laboriosam commodi
        alias?</p> --}}

    <div
        class="w-full rounded-2xl  bg-gradient-to-r from-orange-500 to-pink-500 grid grid-cols-1 justify-between p-7 mb-10 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2">
        <div class="flex flex-col gap-2 items-start">
            <h1 class="text-3xl font-bold text-start text-gray-800 dark:text-gray-300">👋 Bienvenido al panel de
                Administrador
            </h1>
            <p class=" text-gray-800 text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi nobis
                voluptas
                ullam,
                perferendis in enim at
                quaerat maxime placeat! Cumque libero aliquid omnis cupiditate necessitatibus voluptatem iure laboriosam
                commodi
                alias?</p>
            <x-buttonP href="" class="bg-transparent border-gray-400 text-start">
                Explorar Ahora
            </x-buttonP>
        </div>
        <div class="relative flex items-end justify-end">
            <img src="{{ asset('img/super-cat.png') }}" alt="Graph Evolution super admin cat" class="absolute -mb-16"
                width="30%">
        </div>
    </div>

    <div class="flex flex-col justify-center items-center w-full">
        <div
            class="relative flex flex-col items-center rounded-[20px] w-full mx-auto bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none p-3">
            <div class="mt-2 mb-8 w-full">
                <h4 class="px-2 text-xl font-bold text-navy-700 dark:text-white">
                    Informacion Genaral
                </h4>
                <p class="mt-2 px-2 text-base text-gray-600">
                    Explore el contenido que tiene a su control
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 px-2 w-full">
                <div
                    class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <p class="flex font-semibold text-navy-700 dark:text-white">
                        Administradores
                    </p>
                    <p class=" text-gray-600">Navegue para realizar cambios o revisar el contenido.</p>
                    <span
                        class=" flex text-blue-700 font-bold leading-4 opacity-75  hover:text-blue-800 dark:text-blue-800">

                        <a href="{{ route('admin.users') }}">Ver mas</a>
                        <svg width="16" height="16" fill="currentColor" class="bi bi-caret-right"
                            viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                    </span>
                </div>
                <div
                    class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <p class="flex font-semibold text-navy-700 dark:text-white">
                        Pagina Inicio
                    </p>
                    <p class=" text-gray-600">Navegue para realizar cambios o revisar el contenido.</p>
                    <span
                        class=" flex text-blue-700 font-bold leading-4 opacity-75  hover:text-blue-800 dark:text-blue-800">

                        <a href="{{ route('admin.home.index') }}">Ver mas</a>
                        <svg width="16" height="16" fill="currentColor" class="bi bi-caret-right"
                            viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                    </span>
                </div>
                <div
                    class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <p class="flex font-semibold text-navy-700 dark:text-white">
                        Servicios
                    </p>
                    <p class=" text-gray-600">Navegue para realizar cambios o revisar el contenido.</p>
                    <span
                        class=" flex text-blue-700 font-bold leading-4 opacity-75  hover:text-blue-800 dark:text-blue-800">

                        <a href="{{ route('admin.services.index') }}">Ver mas</a>
                        <svg width="16" height="16" fill="currentColor" class="bi bi-caret-right"
                            viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                    </span>
                </div>
                <div
                    class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <p class="flex font-semibold text-navy-700 dark:text-white">
                        Mensaje
                    </p>
                    <p class=" text-gray-600">Navegue para realizar cambios o revisar el contenido.</p>
                    <span
                        class=" flex text-blue-700 font-bold leading-4 opacity-75  hover:text-blue-800 dark:text-blue-800">

                        <a href="{{ route('admin.message') }}">Ver mas</a>
                        <svg width="16" height="16" fill="currentColor" class="bi bi-caret-right"
                            viewBox="0 0 16 16">
                            <path
                                d="M6 12.796V3.204L11.481 8zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
                        </svg>
                    </span>
                </div>

            </div>
        </div>
    </div>

    <!-- component -->
    <div class="flex flex-col justify-center items-center h-auto mt-20 w-full p-3">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2706.405743202842!2d-71.53265843287788!3d-16.402683440202605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424bd345e6f8a7%3A0x767df0b4c65fbbb7!2sGraph%20Evolution%20S.R.L.!5e0!3m2!1ses!2spe!4v1699292305687!5m2!1ses!2spe"
            width="80%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
</div>
