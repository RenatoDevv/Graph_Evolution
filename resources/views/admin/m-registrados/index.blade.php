<x-app-layout>
    <x-container--admin>
        <h1 class="text-3xl font-bold text-center text-gray-800">Detalles de la Mensajes enviados desde la Pagina Contacto</h1>

        <div class="bg-white p-8 rounded-md w-full">
            <div class="mb-0 px-6 py-6">
                <div class="text-center flex justify-between p-4">
                    <h6 class="text-gray-700 text-xl font-bold">
                        Informacion
                    </h6>
                </div>
            </div>
            <div class="inline-block min-w-full shadow rounded-md overflow-hidden">
                <table class="w-full border-collapse bg-white text-left text-sm text-gray-500 ">
                    <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                ID
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                CORREO
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                MENSAJE
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
                    @foreach ($contacts as $contact)
                        <tbody>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    {{ $contact->id }}
                                </td>
                                <td class="px-5 py-4 flex items-center gap-1">
                                    <span class="inline-flex items-center">{{ $contact->email }}
                                </td>
                                <td class="px-5 py-4">
                                    <div class="inline-flex items-center">
                                        {!! Str::limit($contact->message, 50) !!}
                                    </div>
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
                                        <a href="{{ route('admin.question.show', $contact->id) }}"
                                            class="bg-blue-100 text-blue-500 hover:text-blue-600 hover:bg-blue-100 px-2 py-1 rounded-md flex items-center">
                                            <i class="material-icons-outlined text-lg">visibility</i>
                                        </a>
                                        <form action="{{ route('admin.question.delete', $contact->id) }}"
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
        </div>
    </x-container--admin>
</x-app-layout>
