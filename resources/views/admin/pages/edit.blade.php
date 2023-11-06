<x-app-layout>
    <div class="py-0 w-auto">
        <div class="w-auto mx-auto">
            <div class=overflow-hidden shadow-xl">
                {{-- contenido dentro del contenedor padre --}}

                <section
                    class="flex flex-col p-2 lg:p-8 dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700 gap-3">
                    <h1 class="text-3xl font-bold text-center text-gray-800">Actualizar Datos de la Pagina</h1>
                    <p class="text-center text-gray-500">Datos de la Pagina {{ $page->name }}</p>
                    <div class="bg-white p-8 rounded-md w-full">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-50 border-0">
                            <div class="rounded-t  mb-0 px-6 py-6">
                                <div class="text-center flex justify-between">
                                    <h6 class="text-gray-700 text-xl font-bold">
                                        Informacion
                                    </h6>
                                </div>
                            </div>
                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                <form class="mt-8 space-y-3" action="{{ route('admin.pages.update', $page->id) }}"
                                    method="POST">
                                    @csrf
                                    <h6 class="text-gray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                        Informacion de la Pagina
                                    </h6>
                                    <div class="flex flex-wrap">
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                    htmlfor="grid-password">
                                                    Nombre
                                                </label>
                                                <input
                                                    class=" px-3 py-3 bg-white rounded text-sm shadow w-full ease-linear p-2 border border-gray-300  focus:outline-none focus:border-indigo-500 text-gray-500 placeholder:text-slate-400"
                                                    type="text" name="name" value="{{ $page->title }}"
                                                    placeholder="Nombre">
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="mt-6 border-b-1 border-blueGray-300">

                                    <h6 class="text-gray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                        {{-- Mas Informacion --}}
                                    </h6>
                                    <div class="flex flex-wrap">
                                        <div class="w-full lg:w-12/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                    htmlfor="grid-password">
                                                    Descripcion
                                                </label>
                                                <textarea type="text" name="description"
                                                    class="border-0 px-3 text-gray-500 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    rows="4" placeholder="Descripcion de la pagina">{{ $page->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full px-4">
                                        <div class="flex flex-col items-center w-full m-auto">
                                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                htmlfor="grid-password">
                                                Suba una imagen
                                            </label>
                                            <span class="text-xs pb-3">La imagen debe ser de formato png o jpg de tamaño
                                                1300 </span>
                                            <input
                                                class="px-3 py-3 rounded text-sm shadow ease-linear border border-gray-300  focus:outline-none focus:border-indigo-500 text-gray-500 placeholder:text-slate-400"
                                                type="file" name="imagen_logo" value=""
                                                placeholder="Descripcion">
                                        </div>
                                    </div>
                                    <div class="flex  gap-5 justify-center">
                                        <a href="{{ route('admin.pages') }}"
                                            class="my-5 w-auto flex justify-center bg-indigo-500 text-gray-100 py-2 px-20  rounded-full tracking-wide
                                            font-semibold  focus:outline-none focus:shadow-outline hover:bg-indigo-600 shadow-lg cursor-pointer transition ease-in duration-300">
                                            Cancelar
                                        </a>
                                        <button type="submit"
                                            class="my-5 w-auto flex justify-center bg-blue-500 text-gray-100 py-2 px-20 rounded-full tracking-wide
                                            font-semibold  focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
                                            Actualizar
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </section>
                <div class="flex justify-center pb-4 pt-2">
                    <a href="#" class="text-brand-500 font-bold pt-3 text-center m-auto">Graph Evolution</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
