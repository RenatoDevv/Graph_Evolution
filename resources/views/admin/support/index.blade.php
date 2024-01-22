<x-app-layout>
    <x-container--admin>
        <h1 class="text-3xl font-bold text-center text-gray-800">
            Preguntas Frecuentes
        </h1>
        <div class="bg-white p-8 rounded-md w-full">
            <div class="rounded-t  mb-0 px-6 py-6">
                <div class="text-center flex justify-between p-4">
                    <h6 class="text-gray-700 text-xl font-bold">
                        Total de Preguntas
                    </h6>
                    <div class="lg:ml-40 ml-10 space-x-8">
                        <x-buttonP href="{{ route('admin.support.create') }}"
                            class="
                            border-2 border-violet-600">Añadir</x-buttonP>

                    </div>
                </div>
            </div>
            <div class="inline-block min-w-full shadow rounded-md overflow-hidden">
                <table class="w-full border-collapse bg-white text-left text-sm text-gray-500 ">
                    <thead class="bg-gray-50">
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                ID
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 tracking-wider">
                                TITULO
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 tracking-wider">
                                PREGUNTA
                            </th>

                            <th
                                class="pl-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 tracking-wider">
                                OPCIONES
                            </th>
                        </tr>
                    </thead>
                    @foreach ($supports as $support)
                        <tbody>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <span>{{ $support->id }}</span>
                                </td>
                                <td class="px-5 py-4">
                                    <p class="font-medium inline-flex items-center text-sm">{!! Str::limit($support->title, 30) !!}</p>
                                </td>
                                <td class="px-5 py-4">
                                    <span
                                        class="inline-flex items-center text-sm font-normal ">
                                        {!! Str::limit($support->description, 50) !!}
                                    </span>
                                </td>

                                <td class="px-5 py-4">
                                    <div class="flex justify-start gap-4">
                                        <a href="{{ route('admin.support.show', $support->id) }}"
                                            class="bg-blue-100 text-blue-500 hover:text-blue-600 hover:bg-blue-100 px-2 py-1 rounded-md flex items-center">
                                            <i class="material-icons-outlined text-lg">visibility</i>
                                        </a>
                                        <a href="{{ route('admin.support.edit', $support->id) }}"
                                            class="bg-yellow-100 text-yellow-400 hover:text-yellow-600 hover:bg-yellow-100 px-2 py-1 rounded-md flex items-center">
                                            <i class="material-icons-outlined text-base">edit</i>
                                        </a>
                                        <form action="{{ route('admin.support.delete', $support->id) }}" method="post">
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
        </div>
    </x-container--admin>
</x-app-layout>
