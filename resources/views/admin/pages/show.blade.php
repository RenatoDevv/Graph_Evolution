<x-app-layout>
    <div class="py-0 w-auto">
        <div class="w-auto mx-auto">
            <div class=overflow-hidden shadow-xl">
                {{-- el contenido se mostrara dentro de este contenedor --}}

                <section
                    class="flex flex-col p-2 lg:p-8 dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700 gap-3">
                    <h1 class="text-3xl font-bold text-center text-gray-800">Ver Detalles del Usuario 👤</h1>
                    <p class="text-center text-gray-500">Datos del usuario</p>
                    <div class="bg-white p-8 rounded-md w-full">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-50 border-0">
                            <div class="rounded-t  mb-0 px-6 py-6">
                                <div class="text-center flex justify-between p-4">
                                    <h6 class="text-gray-700 text-xl font-bold">
                                        Informacion
                                    </h6>
                                    <a href="{{ route('admin.pages') }}"
                                        class=" my-5 w-auto flex justify-center bg-indigo-500 text-gray-100 py-2 px-20 rounded-full tracking-wide
                                        font-semibold  focus:outline-none focus:shadow-outline hover:bg-indigo-600 shadow-lg cursor-pointer transition ease-in duration-300"
                                        type="button">
                                        Regresar
                                    </a>
                                </div>
                            </div>
                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                <form>
                                    <h6 class="text-gray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                        Informacion personal
                                    </h6>
                                    <div class="flex flex-wrap">
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                    htmlfor="grid-password">
                                                    Nombre
                                                </label>
                                                <p
                                                    class="border-0 px-3 py-3 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150">
                                                    {{ $page->title }}</p>
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                    htmlfor="grid-password">
                                                    Correo Electronico
                                                </label>
                                                <p
                                                    class="border-0 px-3 py-3 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150">
                                                    {{ $page->description }}</p>
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
                                                    ACERCA DE
                                                </label>
                                                <textarea type="text"
                                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    rows="4" placeholder="En este campo se muestra los datos del administrador"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <footer class="relative  pt-8 pb-6 mt-2">
                            <div class="container mx-auto px-4">
                                <div class="flex flex-wrap items-center md:justify-between justify-center">
                                    <div class="w-full md:w-6/12 px-4 mx-auto text-center">
                                        <div class="text-sm text-blueGray-500 font-semibold py-1">
                                            Graph Evolution
                                        </div>
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
