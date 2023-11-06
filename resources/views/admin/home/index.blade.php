<x-app-layout>
    <div class="py-0 w-auto">
        <div class="w-auto mx-auto">
            <div class=overflow-hidden shadow-xl">
                <section
                    class="flex flex-col p-2 lg:p-8 dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700 gap-3">
                    <h1 class="text-3xl font-bold text-center text-gray-800">Detalles de la Pagina de Inicio </h1>
                    <p class="text-center text-gray-500">Datos de la Pagina</p>
                    <div class="bg-white p-8 rounded-md w-full">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-50 border-0">
                            <div class="rounded-t  mb-0 px-6 py-6">
                                <div class="text-center flex justify-between p-4">
                                    <h6 class="text-gray-700 text-xl font-bold">
                                        Informacion
                                    </h6>
                                    {{-- <a href=""
                                        class=" my-5 w-auto flex justify-center bg-indigo-500 text-gray-100 py-2 px-20 rounded-full tracking-wide
                                        font-semibold  focus:outline-none focus:shadow-outline hover:bg-indigo-600 shadow-lg cursor-pointer transition ease-in duration-300"
                                        type="button">
                                        Crear
                                    </a> --}}
                                </div>
                            </div>
                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
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
                                    @foreach ($homes as $home)
                                        <tbody>
                                            <tr class="hover:bg-gray-50">
                                                <td class="px-6 py-4">
                                                    {{ $home->id }}
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
                                                        <div class="font-medium ">{{ $home->title }}</div>
                                                    </div>
                                                </td>

                                                <td class="px-5 py-4">
                                                    <span
                                                        class="inline-flex items-center gap-1 rounded-full px-2 py-1 text-xs font-semibold ">
                                                        {!! Str::limit($home->description, 30) !!}
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
                                                        <a href=""
                                                            class="bg-blue-100 text-blue-500 hover:text-blue-600 hover:bg-blue-100 px-2 py-1 rounded-md flex items-center">
                                                            <i class="material-icons-outlined text-base">visibility</i>
                                                        </a>
                                                        <a href="{{ route('admin.home.edit', $home->id) }}"
                                                            class="bg-yellow-100 text-yellow-400 hover:text-yellow-600 hover:bg-yellow-100 px-2 py-1 rounded-md flex items-center">
                                                            <i class="material-icons-outlined text-base">edit</i>
                                                        </a>
                                                        {{-- <form action="{{ route('admin.home.eliminar', $home->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="bg-red-100 text-red-400 hover:text-red-600 hover:bg-red-100 px-2 py-1 rounded-md flex items-center">
                                                                <i
                                                                    class="material-icons-round text-base">delete_outline</i>
                                                            </button>
                                                        </form> --}}
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <footer class="relative  pt-8 pb-6 mt-2">
                            <div class="container mx-auto px-4">
                                <div class="flex flex-wrap items-center md:justify-between justify-center">
                                    <div class="w-full md:w-6/12 px-4 mx-auto text-center">
                                        <a href="#" class="text-brand-500 font-bold pt-3 text-center m-auto">Graph Evolution</a>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
