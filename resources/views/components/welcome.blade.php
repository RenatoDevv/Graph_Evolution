<div class="flex flex-col p-2 lg:p-8 dark:bg-[#313a46]  dark:via-transparent  gap-3 relative">
    <button type="button" class="right-0 absolute top-0"> Open</button>
    <h1 class="text-3xl font-bold text-center text-gray-800 dark:text-gray-300">👋 Bienvenido al panel de Administrador
    </h1>
    <p class="text-center text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi nobis voluptas
        ullam,
        perferendis in enim at
        quaerat maxime placeat! Cumque libero aliquid omnis cupiditate necessitatibus voluptatem iure laboriosam commodi
        alias?</p>
    <div class="flex justify-between min-[400px]:flex-col lg:flex-row gap-5">
        <!-- end: Social Network notification:light -->
        <div class="w-auto h-auto relative">
            <div
                class="bg-white  px-5 py-3.5 rounded-lg shadow hover:shadow-xl max-w-sm mx-auto transform hover:-translate-y-[0.125rem] transition duration-100 ease-linear dark:bg-[#ffffff12]  text-white">
                <div class="w-full flex items-center justify-between">
                    <span class="font-bold text-base text-slate-600 dark:text-gray-100">Usuarios</span>
                </div>
                <div class="flex items-center mt-2 rounded-lg px-1 py-1 cursor-pointer">
                    <div class="relative flex flex-shrink-0 items-end">
                        <img class="min-w-min h-24 w-24 rounded-full" src="{{ asset('img/admin/perfil.jpg') }}">
                        <span
                            class="absolute h-4 w-4 bg-green-400 rounded-full bottom-0 right-0 border-2 border-white"></span>
                    </div>
                    <div class="ml-3">
                        <span class="font-semibold text-sm text-slate-600 dark:text-gray-100">Administradores del sitio
                            web</span>
                        <span class="text-sm leading-none opacity-100"></span>

                        <p class="font-semibold text-sm text-slate-600 dark:text-gray-100">total: 3</p>
                        <span
                            class="text-xs text-blue-500 font-bold leading-4 opacity-75 hover:text-sm hover:text-blue-700 dark:text-blue-400">
                            <a href="{{ route('admin.pages') }}">Ver mas</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-auto h-auto relative">
            <div
                class="bg-white  px-5 py-3.5 rounded-lg shadow hover:shadow-xl max-w-sm mx-auto transform hover:-translate-y-[0.125rem] transition duration-100 ease-linear dark:bg-[#ffffff12] ">
                <div class="w-full flex items-center justify-between">
                    <span class="font-bold text-base text-slate-600 dark:text-white">Sitio web</span>
                </div>
                <div class="flex items-center mt-2 rounded-lg py-1 cursor-pointer">
                    <div class="relative flex flex-shrink-0 items-end">
                        <img class="h-24 w-24 rounded-full"
                            src="https://assets-blog.hostgator.mx/wp-content/uploads/2017/12/blog-7-coisas-para-comecar.webp">
                        <span
                            class="absolute h-4 w-4 bg-green-400 rounded-full bottom-0 right-0 border-2 border-white"></span>
                    </div>
                    <div class="ml-3.5">
                        <span class="font-semibold text-sm text-slate-600 dark:text-white">Paginas comformados del sitio
                            web</span>
                        <p class="font-semibold text-sm text-slate-600 dark:text-white">Total: 5</p>
                        <span
                            class="text-xs text-blue-500 font-bold leading-4 opacity-75 hover:text-sm hover:text-blue-700">
                            <a href="{{ route('admin.pages') }}">Ver mas</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- start: Social Network notification:dark -->
        <div class="w-auto h-auto relative  min-[400px]:hidden  sm:hidden lg:block">
            <div
                class="bg-white  px-5 py-3.5 rounded-lg shadow hover:shadow-xl max-w-sm mx-auto transform hover:-translate-y-[0.125rem] transition duration-100 ease-linear dark:bg-[#ffffff12]">
                <div class="w-full flex items-center justify-between">
                    <span class="font-bold text-base text-slate-600">Pagin Inicio</span>
                </div>
                <div class="flex items-center mt-2 rounded-lg py-1 cursor-pointer">
                    <div class="relative flex flex-shrink-0 items-end">
                        <img class="h-24 w-24 rounded-full"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIxwgv7JU0r9ZrBdHmNAKo5mYRH85xP7qtQA&usqp=CAU">
                        <span
                            class="absolute h-4 w-4 bg-green-400 rounded-full bottom-0 right-0 border-2 border-white"></span>
                    </div>
                    <div class="ml-3.5">
                        <span class="font-semibold text-sm text-slate-600 dark:text-white">Pagina de Inicio,
                            Informacion</span>
                        <p class="font-semibold text-sm text-slate-600 dark:text-white">.</p>
                        <span
                            class="text-xs text-blue-500 font-bold leading-4 opacity-75 hover:text-sm hover:text-blue-700">
                            <a href="{{ route('admin.home.index') }}">Ver mas</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="w-auto h-auto relative min-[400px]:hidden sm:hidden md:hidden lg:block">
            <div
                class="bg-white   px-5 py-3.5 rounded-lg shadow hover:shadow-xl max-w-sm mx-auto transform hover:-translate-y-[0.125rem] transition duration-100 ease-linear ">
                <div class="w-full flex items-center justify-between">
                    <span class="font-bold text-base text-slate-600">Datos Vacios</span>
                </div>
                <div class="flex items-center mt-2 rounded-lg px-1 py-1 cursor-pointer">
                    <div class="relative flex flex-shrink-0 items-end">
                        <img class="h-24 w-24 rounded-full"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_y0Sae7U8L5bC09KUISBwq-b6T5ZMgIEfr7K6WuymE4wwIAQ5Pu1vTPUNKJsw6FyuGQ4&usqp=CAU">
                        <span
                            class="absolute h-4 w-4 bg-green-400 rounded-full bottom-0 right-0 border-2 border-white"></span>
                    </div>
                    <div class="ml-3.5">
                        <span class="font-semibold text-sm text-slate-600 dark:text-white"><code>This is code
                                text</code>
                            web</span>
                        <p class="font-semibold text-sm text-slate-600 dark:text-white">.</p>
                        <span
                            class="text-xs text-blue-500 font-bold leading-4 opacity-75 hover:text-sm hover:text-blue-700">
                            <a href="">Ver mas</a>
                        </span>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    <!-- component -->
    <div class="flex flex-col justify-center items-center h-auto mt-20 w-full p-3">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2706.405743202842!2d-71.53265843287788!3d-16.402683440202605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424bd345e6f8a7%3A0x767df0b4c65fbbb7!2sGraph%20Evolution%20S.R.L.!5e0!3m2!1ses!2spe!4v1699292305687!5m2!1ses!2spe"
            width="80%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
    <a href="#" class="text-brand-500 font-bold pt-3 text-center m-auto">Graph Evolution</a>
</div>
