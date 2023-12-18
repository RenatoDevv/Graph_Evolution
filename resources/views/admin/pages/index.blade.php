<x-app-layout>
    <div
        class="flex  flex-col p-2 lg:p-8 dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700 gap-3">
        <h1 class="text-3xl font-bold text-center text-gray-800">👋 Bienvenido al panel de Paginas</h1>
        <p class="text-center text-gray-500">En esta seccion se muestra toda la informacion de las paginas existentes
            dentro del sitio web</p>
        <div class="bg-white p-8 rounded-md w-full">
            <div class=" flex items-center justify-between pb-6">
                <div>
                    <h2 class="text-gray-600 font-semibold text-2xl">Paginas</h2>
                    <span class="text-sm">Total de Paginas</span>
                </div>
                <div class="flex items-center justify-between ">
                    <div class="relative mt-2 rounded-md shadow-sm">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center px-3">
                            <span class="text-gray-500 sm:text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1.2em"
                                    viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #d1d1d1
                                        }
                                    </style>
                                    <path
                                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                                </svg>
                            </span>
                        </div>
                        <input type="search" name="" id="search"
                            class="block w-full rounded-md border-0 py-1.5 pl-10 pr-20 text-gray-900 ring-1 ring-gray-100 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 hover:ring-1 hover:ring-gray-300"
                            placeholder="Buscar....">
                    </div>
                    <div class="lg:ml-40 ml-10 space-x-8">
                        <x-buttonP href="{{ route('admin.pages.create') }}" class="border-2 border-violet-600 px-14">
                            Añadir
                        </x-buttonP>

                    </div>
                </div>
            </div>
            <div>
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        NOMBRE
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        DESCRIPCION
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        ESTADO
                                    </th>
                                    <th
                                        class="pl-8 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Options
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($pages as $page)
                                <tbody>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4">
                                            {{ $page->id }}
                                        </td>
                                        <td class="px-5 py-4 flex items-center gap-1">
                                            <div class="relative h-10 w-10">
                                                <img class="h-full w-full rounded-full object-cover object-center"
                                                    src="https://www.comparapps.com/wp-content/uploads/2020/04/que-es-una-pagina-web.png"
                                                    alt="" />
                                                <span
                                                    class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span>
                                            </div>
                                            <div class="text-sm">
                                                <div class="font-medium ">{{ $page->name }}</div>
                                            </div>
                                        </td>

                                        <td class="px-5 py-4">
                                            <span
                                                class="inline-flex items-center gap-1 rounded-full px-2 py-1 text-xs font-semibold ">
                                                {!! Str::limit($page->description, 30) !!}
                                            </span>
                                        </td>
                                        <td class="px-5 py-4">
                                            <div class="flex gap-2">
                                                <span
                                                    class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                                    Activo
                                                </span>
                                            </div>
                                        </td>
                                        <td class="px-5 py-4">
                                            <div class="flex justify-start gap-4">
                                                <a href="{{ route('admin.pages.show', $page) }}"
                                                    class="bg-blue-100 text-blue-500 hover:text-blue-600 hover:bg-blue-100 px-2 py-1 rounded-md flex items-center">
                                                    <i class="material-icons-outlined text-base">visibility</i>
                                                </a>
                                                <a href="{{ route('admin.home.index') }}"
                                                    class="bg-yellow-100 text-yellow-400 hover:text-yellow-600 hover:bg-yellow-100 px-2 py-1 rounded-md flex items-center">
                                                    <i class="material-icons-outlined text-base">edit</i>
                                                </a>
                                                {{-- <form action="{{ route('admin.pages.eliminar', $page->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="bg-red-100 text-red-400 hover:text-red-600 hover:bg-red-100 px-2 py-1 rounded-md flex items-center">
                                                        <i class="material-icons-round text-base">delete_outline</i>
                                                    </button>
                                                </form> --}}
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                        <div
                            class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                            <span class="text-xs xs:text-sm text-gray-900">
                                Mostrando datos
                            </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center pb-4 pt-2">
        <a href="#" class="text-brand-500 font-bold pt-3 text-center m-auto">Graph Evolution</a>
    </div>

</x-app-layout>
