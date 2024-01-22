<x-app-layout>
    <div class="py-0 w-auto">
        <div class="w-auto mx-auto">
            <div class="overflow-hidden shadow-xl">
                {{-- el contenido se mostrara dentro de este contenedor --}}

                <section
                    class="flex flex-col p-2 lg:p-8 dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700 gap-3">
                    <h1 class="text-3xl font-bold text-center text-gray-800">Editar Aviso</h1>
                    <p class="text-center text-gray-500">Datos del Aviso</p>
                    <div class="bg-white p-8 rounded-md w-full">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 rounded-lg border-0">
                            <div class="rounded-t  mb-0 px-6 py-6">
                                <div class="text-center flex justify-between p-4">
                                    <h6 class="text-gray-700 text-xl font-bold">
                                        Informacion
                                    </h6>
                                    <x-buttonP href="{{ route('admin.message') }}"
                                        class="border-2 border-violet-600 px-14">
                                        Regrasar
                                    </x-buttonP>
                                </div>
                            </div>
                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                <form class="mt-8 space-y-3" action="{{ route('admin.message.update', $message->id) }}"
                                    method="POST">
                                    @csrf
                                    <h6 class="text-gray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                        Informacion personal
                                    </h6>
                                    <div class="flex flex-wrap ">
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                    htmlfor="grid-password">
                                                    Email
                                                </label>
                                                <input class="border-0 px-3 py-3 bg-gray-50 rounded text-sm shadow w-full ease-linear transition-all duration-150" type="text" name="name" value="{{ $message->name}}">

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
                                                    Mensaje
                                                </label>
                                                <textarea type="text" name="message"
                                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-gray-50 text-gray-500 rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                    rows="4" placeholder="Descripcion de la pagina">{{ $message->message }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex  gap-5 justify-center items-center">
                                        <x-buttonP href="{{route('admin.message')}}" class="border-2 border-violet-600">
                                            Cancelar
                                        </x-buttonP>
                                        <x-button type="submit"
                                            class="border-2 border-violet-600 text-black   hover:bg-violet-600  hover:text-white rounded-lg">
                                            Actualizar
                                        </x-button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
