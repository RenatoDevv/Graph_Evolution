<x-app-layout>
    <x-container--admin>
        <h1 class="text-3xl font-bold text-center text-gray-800">👋 Bienvenido al panel de Mensajes de Eventos</h1>
        <p class="text-center text-gray-500">En esta seccion se muestra toda la informacion de las los mensajes que se
            publicaran en la Web</p>
        <div class="bg-white p-8 rounded-md w-full">
            <div class=" flex items-center justify-between pb-6">
                <div>
                    <h2 class="text-gray-600 font-semibold text-2xl">Mensaje</h2>
                </div>
                <div class="flex items-center justify-between">
                    <div class="lg:ml-40 ml-10 space-x-8">
                        <button
                            class="rounded-lg bg-violet-600 py-3 px-6 text-center text-base text-white shadow-md shadow-violet-600/20 hover:shadow-lg hover:shadow-violet-600/40 focus:opacity-[0.85]"
                            type="button" data-ripple-light="true" data-dialog-target="web-3-dialog">
                            Añadir
                        </button>
                    </div>
                </div>
            </div>
            <div>
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600">
                                        ID
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600">
                                        NOMBRE
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600">
                                        DESCRIPCION
                                    </th>
                                    <th
                                        class="pl-8 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600">
                                        OPCIONES
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($mesagges as $mesagge)
                                <tbody>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4">
                                            {{ $mesagge->id }}
                                        </td>
                                        <td class="px-5 py-4">
                                            <span class="inline-flex items-center text-sm">{{ $mesagge->name }}</span>
                                        </td>

                                        <td class="px-5 py-4">
                                            <span class="inline-flex items-center text-sm">
                                                {!! Str::limit($mesagge->message, 30) !!}
                                            </span>
                                        </td>
                                        <td class="px-5 py-4">
                                            <div class="flex justify-start gap-4">
                                                <a href="{{ route('admin.message.show', $mesagge->id) }}"
                                                    class="bg-blue-100 text-blue-500 hover:text-blue-600 hover:bg-blue-100 px-2 py-1 rounded-md flex items-center">

                                                    <i class="material-icons-outlined text-lg">visibility</i>
                                                </a>
                                                <a href="{{ route('admin.message.edit', $mesagge->id) }}"
                                                    class="bg-yellow-100 text-yellow-400 hover:text-yellow-600 hover:bg-yellow-100 px-2 py-1 rounded-md flex items-center">
                                                    <i class="material-icons-outlined text-lg">edit</i>
                                                </a>
                                                <form action="{{ route('admin.message.delete', $mesagge->id) }}"
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
                    </div>

                    <div data-dialog-backdrop="web-3-dialog" data-dialog-backdrop-close="true"
                        class=" fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
                        <div class="relative bg-white m-4 rounded-lg shadow-2xl text-blue-gray-500 font-sans text-base font-light leading-relaxed max-w-lg min-w-[350px]  px-5"
                            data-dialog="web-3-dialog">
                            <form action="{{ route('admin.message.store') }}" method="POST">
                                @csrf
                                <div
                                    class="flex items-center shrink-0 p-4 text-blue-gray-900 antialiased font-sans text-2xl font-semibold leading-snug justify-between">
                                    <h5
                                        class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900">
                                        Agregar Nuevo Mensaje
                                    </h5>
                                    <button
                                        class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
                                        type="button" data-ripple-dark="true" data-dialog-close="true">
                                        <span
                                            class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                                class="h-5 w-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <div
                                    class="relative p-4 text-blue-gray-500 antialiased font-sans text-base font-light leading-relaxed pr-2">
                                    <div class="mb-6">
                                        <input type="text" class="px-3 py-3 bg-white rounded text-sm shadow w-full ease-linear p-2 border border-gray-300  focus:outline-none focus:border-indigo-500 text-gray-500 placeholder:text-slate-400" placeholder="Nombre" name="name">
                                    </div>
                                    <div>
                                        <textarea name="message" id="" cols="30" rows="2" class="px-3 py-3 bg-white rounded text-sm shadow w-full ease-linear p-2 border border-gray-300  focus:outline-none focus:border-indigo-500 text-gray-500 placeholder:text-slate-400" placeholder="Descripcion"></textarea>
                                        
                                    </div>
                                </div>
                                <div
                                    class="w-full flex items-center cursor-pointer flex-wrap p-4 text-blue-gray-500 justify-between gap-2 border-t border-blue-gray-50 ">
                                    <button
                                        class="py-2 px-14 border-2 border-violet-600 text-base flex items-center justify-center text-center w-auto rounded-lg bg-violet-600 hover:bg-violet-700  text-white duration-200"
                                        type="button" data-ripple-dark="true" data-dialog-close="true">Cancelar</button>
                                    <x-button type="submit"
                                        class="border-2 border-violet-600 text-black   hover:bg-violet-600  hover:text-white rounded-lg" data-ripple-light="true" data-dialog-target="web-3-dialog">
                                        Registrar
                                    </x-button>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- SHOW DE MENSAJE --}}

                </div>
            </div>
        </div>
    </x-container--admin>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>

    @if (session('message'))
        <script>
            Swal.fire({
                title: "Registrado!",
                text: "{{ session('message') }}",
                icon: "success"
            });
        </script>
    @endif

    @if (session('eliminado'))
        <script>
            Swal.fire({
                title: "Eliminado!",
                text: "{{ session('eliminado') }}",
                icon: "success"
            });
        </script>
    @endif
    <script>
        // Swal.fire({
        // title: "Are you sure?",
        // text: "You won't be able to revert this!",
        // icon: "warning",
        // showCancelButton: true,
        // confirmButtonColor: "#3085d6",
        // cancelButtonColor: "#d33",
        // confirmButtonText: "Yes, delete it!"
        // }).then((result) => {
        // if (result.isConfirmed) {
        // Swal.fire({
        // title: "Deleted!",
        // text: "Your file has been deleted.",
        // icon: "success"
        // });
        // }
        // });
    </script>
</x-app-layout>
