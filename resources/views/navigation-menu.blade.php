<nav
    class="bg-[#313a46] h-screen  border-gray-100 w-80  lg:block lg:overflow-hidden min-[400px]:hidden sm:hidden md:hidden sticky top-0">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto   sticky top-0">
        <div class="h-screen overflow-auto">
            <div class="flex flex-col items-start gap-0 pt-6">
                <!-- Logo -->
                <div class="shrink-0 flex flex-col items-center w-full ">
                    <a href="{{ route('admin.dashboard') }}">
                        <h1 class="text-white font-bold mb-3">Graph Evolution</h1>
                    </a>
                </div>

                <hr class="h-1 bg-white">
                <!-- Navigation Links -->
                <div class="flex-col items-center justify-between grow w-full h-auto">
                    <ul class="flex flex-col p-0 text-white px-2 w-full gap-2 mb-auto">
                        <li class="w-auto mt-4 ml-5">
                            <h4
                                class=" text-xs text-gray-200 font-bold leading-tight uppercase dark:text-white  opacity-80 2xl:text-sm">
                                NAVEGACION</h4>
                        </li>
                        <li class="mt-0.3 w-full">
                            <x-nav-link href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-grid-1x2-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-5z" />
                                </svg>
                                <span class="ml-5 text-sm 2xl:text-base">{{ __('Dashboard') }}</span>
                            </x-nav-link>
                        </li>
                        <li class="mt-0.3 w-full">
                            <x-nav-link href="{{ route('admin.users') }}" :active="request()->routeIs('admin.users')" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                </svg>
                                <span class="ml-5 text-sm 2xl:text-base">{{ __('Usuarios') }}</span>
                            </x-nav-link>
                        </li>
                        <li class="mt-0.3 w-full">
                            <x-nav-link href="{{ route('admin.pages') }}" :active="request()->routeIs('admin.pages')">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M6.646 7.646a.5.5 0 1 1 .708.708L5.707 10l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708zm2.708 0 2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 10 8.646 8.354a.5.5 0 1 1 .708-.708" />
                                </svg>
                                <span class="ml-5 text-sm 2xl:text-base">{{ __('Paginas') }}</span>
                            </x-nav-link>
                        </li>
                        <li class="mt-0.3 w-full">
                            <x-nav-link href="{{ route('admin.message') }}" :active="request()->routeIs('admin.message')">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901" />
                                </svg>
                                <span class="ml-5 text-sm 2xl:text-base">{{ __('Avisos') }}</span>
                            </x-nav-link>
                        </li>
                        <li class="w-auto mt-4 ml-5">
                            <h4
                                class="text-xs text-gray-200 font-bold leading-tight uppercase dark:text-white  opacity-80 2xl:text-sm">
                                AJUSTES</h4>
                        </li>
                        <li class="mt-0.3 w-full">
                            <x-nav-link href="{{ route('question') }}" :active="request()->routeis('question')">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353zM8 3.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132" />
                                </svg>
                                <span class="ml-5 text-sm 2xl:text-base">Mensajes</span>
                            </x-nav-link>
                        </li>
                        <li class="mt-0.3 w-full">
                            <x-nav-link href="{{ route('admin.support') }}" :active="request()->routeis('admin.support')">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247m2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z" />
                                </svg>
                                <span class="ml-5 text-sm 2xl:text-base">Preguntas</span>
                            </x-nav-link>
                        </li>
                        <li class="w-auto mt-4 ml-5">
                            <h4
                                class="text-xs text-gray-200 font-bold leading-tight uppercase dark:text-white  opacity-80 2xl:text-sm">
                                PAGINAS DEL SITIO
                            </h4>
                        </li>
                        <li class="mt-0.5 w-full">
                            <x-nav-link href="{{ route('admin.home.index') }}" :active="request()->routeIs('admin.home.index')">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                                </svg>
                                <span class="ml-5 text-sm 2xl:text-base">{{ __('Inicio') }}</span>
                            </x-nav-link>
                        </li>
                        <li class="mt-0.5 w-full">
                            <x-nav-link href="{{ route('admin.services.index') }}" :active="request()->routeIs('admin.services.index')">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M1.5 3A1.5 1.5 0 0 0 0 4.5V6a.5.5 0 0 0 .5.5 1.5 1.5 0 1 1 0 3 .5.5 0 0 0-.5.5v1.5A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5V10a.5.5 0 0 0-.5-.5 1.5 1.5 0 0 1 0-3A.5.5 0 0 0 16 6V4.5A1.5 1.5 0 0 0 14.5 3z" />
                                </svg>
                                <span class="ml-5 text-sm 2xl:text-base">{{ __('Servicios') }}</span>
                            </x-nav-link>
                        </li>
                    </ul>
                    <ul class="flex flex-col mb-0 p-3 text-white px-6 w-full gap-2">
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <a class="py-2 text-base m-auto flex items-center justify-center w-full rounded-lg bg-sky-500/75 hover:bg-sky-500/70 dark:opacity-80  dark:text-white float-right"
                                href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                    <path fill-rule="evenodd"
                                        d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                </svg>
                                <span class="ml-5 duration-300 opacity-100 pointer-events-none">Cerrar Sesión</span>
                            </a>
                        </form>

                    </ul>
                </div>

            </div>


        </div>
    </div>

</nav>
<script>
    function darkModeListener() {
        document.querySelector("html").classList.toggle("dark");
    }

    document.querySelector("input[type='checkbox']#dark-toggle").addEventListener("click", darkModeListener);
</script>
