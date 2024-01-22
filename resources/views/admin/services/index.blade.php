<x-app-layout>
    <x-container--admin>
        <h1 class="text-3xl font-bold text-center text-gray-800">👋 Bienvenido al panel de Servicios</h1>
        <p class="text-center text-gray-500">En esta seccion se muestra toda la informacion de las paginas existentes
            dentro del sitio web</p>
        <div class="bg-white p-8 rounded-md w-full">
            <div class=" flex items-center justify-between pb-6">
                <div>
                    <h2 class="text-gray-600 font-semibold text-2xl">Servicios</h2>
                    <span class="text-sm">Total Servicios</span>
                </div>
                <div class="flex items-center justify-between ">
                    <div class="relative mt-2 rounded-md shadow-sm">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center px-3">
                            <span class="text-gray-500 sm:text-sm">
                                <svg fill="currentColor" height="1.2em" viewBox="0 0 512 512">
                                    <style>
                                        {{-- svg {
                                            fill: #09f
                                        } --}}
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
                        <x-buttonP href="{{ route('admin.services.create') }}" class="
                        border-2 border-violet-600">Añadir</x-buttonP>

                    </div>
                </div>
            </div>
            <div>
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-md overflow-hidden">
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
                                        PRECIO
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        IMAGEN
                                    </th>
                                    <th
                                        class="pl-8 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        OPCIONES
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($services as $service)
                                <tbody>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4">
                                            {{ $service->id }}
                                        </td>
                                        <td class="px-5 py-4  gap-4 ">
                                            <div class="text-md flex items-end gap-1">
                                                <div class="font-bold ">{{ $service->title }}</div>
                                                <div class="h-2 w-2 rounded-full bg-green-400 ring ring-white">
                                                </div>

                                            </div>
                                        </td>

                                        <td class="px-5 py-4">
                                            <span
                                                class="inline-flex items-center gap-1 rounded-full px-2 py-1 text-sm font-medium ">
                                                {!! Str::limit($service->description, 30) !!}
                                            </span>
                                        </td>
                                        <td class="px-5 py-4">
                                            <div class="flex gap-2">
                                                <span
                                                    class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                                    {{ $service->price }}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="px-5 py-4">
                                            <div class="flex gap-2">
                                                <span
                                                    class="inline-flex items-center rounded-md bg-green-500 px-1 py-1 h-20 w-20 text-xs font-semibold">
                                                    <img src="{{ asset('storage/' . $service->images_file) }}"
                                                        alt="Imagen"
                                                        class="h-full w-full rounded-full object-cover object-center">
                                                </span>
                                            </div>
                                        </td>
                                        <td class="px-5 py-4">
                                            <div class="flex justify-start gap-4">
                                                <a href="{{ route('admin.services.show', $service->id) }}"
                                                    class="bg-blue-100 text-blue-500 hover:text-blue-600 hover:bg-blue-100 px-2 py-1 rounded-md flex items-center">
                                                    <i class="material-icons-outlined text-lg">visibility</i>
                                                </a>
                                                <a href="{{ route('admin.services.edit', $service->id) }}"
                                                    class="bg-yellow-100 text-yellow-400 hover:text-yellow-600 hover:bg-yellow-100 px-2 py-1 rounded-md flex items-center">
                                                    <i class="material-icons-outlined text-lg">edit</i>
                                                </a>
                                                <form action="{{ route('admin.services.delete', $service->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="bg-red-100 text-red-400 hover:text-red-600 hover:bg-red-100 px-2 py-1 rounded-md flex items-center">
                                                        <i class="material-icons-round text-lg">delete_outline</i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                        <div
                            class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                            <span class="text-xs xs:text-sm text-gray-900">
                                Mostrando todos los servicios
                            </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-container--admin>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Swal.fire({
        //     title: "Are you sure?",
        //     text: "You won't be able to revert this!",
        //     icon: "warning",
        //     showCancelButton: true,
        //     confirmButtonColor: "#3085d6",
        //     cancelButtonColor: "#d33",
        //     confirmButtonText: "Yes, delete it!"
        // }).then((result) => {
        //     if (result.isConfirmed) {
        //         Swal.fire({
        //             title: "Deleted!",
        //             text: "Your file has been deleted.",
        //             icon: "success"
        //         });
        //     }
        // });
    </script>
</x-app-layout>
