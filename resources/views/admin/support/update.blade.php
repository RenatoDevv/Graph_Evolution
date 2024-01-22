<x-app-layout>
    <div class="py-0 w-auto">
        <div class="w-auto mx-auto">
            <div class=overflow-hidden shadow-xl">
                {{-- contenido dentro del contenedor padre --}}
                <section
                    class="flex flex-col p-2 lg:p-8 dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700 gap-3">
                    <h1 class="text-3xl font-bold text-center text-gray-800">Actualizar pregunta de Soporte</h1>
                    <p class="text-center text-gray-500">Datos de Pregunta</p>
                    <div class="bg-white p-8 rounded-md w-full">
                        <div class="rounded-t  mb-0 px-6 py-6">
                            <div class="text-center flex justify-between">
                                <h6 class="text-gray-700 text-xl font-bold">
                                    Informacion
                                </h6>
                            </div>
                        </div>
                        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                            <form class="mt-8 space-y-3" action="{{ route('admin.support.update', $support->id) }}" method="POST">
                                @csrf
                                <h6 class="text-gray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                    Informacion de la pregunta
                                </h6>
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Titulo
                                            </label>
                                            <input
                                                class=" px-3 py-3 bg-gray-50 rounded text-sm shadow w-full ease-linear p-2 border border-gray-300  focus:outline-none focus:border-indigo-500 text-gray-500 placeholder:text-slate-400"
                                                type="text" name="title" value="{{ $support->title }}"
                                                placeholder="Titulo de la pregunta" required>
                                        </div>
                                    </div>
                                </div>

                                <hr class="mt-6 border-b-1 border-blueGray-300">

                                <h6 class="text-gray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                    Mas Informacion
                                </h6>
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-12/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Descripcion
                                            </label>
                                            <textarea type="text" name="description"
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-gray-50 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                rows="6" placeholder="Descripcion de la pagina">{{ $support->description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex  gap-5 justify-center">
                                    <x-buttonP href="{{ route('admin.support') }}">Cancelar</x-buttonP>
                                    <x-button type="submit"
                                        class="border-2 border-violet-600 text-black   hover:bg-violet-600  hover:text-white rounded-lg">Actualizar
                                    </x-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
