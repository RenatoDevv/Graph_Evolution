<x-app-layout>
    <div class="py-0 w-auto">
        <div class="w-auto mx-auto">
            <div class=overflow-hidden shadow-xl">
                <x-container--admin>
                    <h1 class="text-3xl font-bold text-center text-gray-800">Detalles de la Pagina de Inicio Graph
                        Evolution</h1>
                    <p class="text-center text-gray-500">Datos de la Pagina</p>

                    <div class="bg-white p-8 rounded-md w-full">
                            <h6 class="text-gray-700 text-xl font-bold">
                                Informacion
                            </h6>
                            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                                <div class="inline-block min-w-full shadow rounded-md  overflow-hidden">
                                    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                                        <thead class="border-b-2 border-gray-200 bg-gray-100">
                                            <tr>
                                                <th
                                                    class="px-5 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                    ID
                                                </th>
                                                <th
                                                    class="px-5 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                    NOMBRE
                                                </th>
                                                <th
                                                    class="px-5 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                    DESCRIPCION
                                                </th>
                                                <th
                                                    class="px-5 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                    ESTADO
                                                </th>
                                                <th
                                                    class="pl-8 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
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
                                                            <img src="{{ asset('storage/' . $home->image_file) }}"
                                                                alt="Imagen"
                                                                class="h-full w-full rounded-full object-cover object-center">
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
                                                            {!! Str::limit($home->description, 50) !!}
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
                                                                <i
                                                                    class="material-icons-outlined text-lg">visibility</i>
                                                            </a>
                                                            <a href="{{ route('admin.home.edit', $home->id) }}"
                                                                class="bg-yellow-100 text-yellow-400 hover:text-yellow-600 hover:bg-yellow-100 px-2 py-1 rounded-md flex items-center">
                                                                <i class="material-icons-outlined text-lg">edit</i>
                                                            </a>
                                                            <form action="{{ route('admin.home.delete', $home->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="bg-red-100 text-red-400 hover:text-red-600 hover:bg-red-100 px-2 py-1 rounded-md flex items-center">
                                                                    <i
                                                                        class="material-icons-round text-lg">delete_outline</i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                    </div>
                </x-container--admin>
            </div>
        </div>
    </div>
</x-app-layout>
