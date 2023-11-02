<x-app-layout>
    <div
        class="flex flex-col p-2 lg:p-8 dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700 gap-3">
        <h1 class="text-3xl font-bold text-center text-gray-800">👋 Bienvenido al panel de Usuarios</h1>
        <p class="text-center text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi nobis voluptas ullam,
            perferendis in enim at
            quaerat maxime placeat! Cumque libero aliquid omnis cupiditate necessitatibus voluptatem iure laboriosam
            commodi
            alias?</p>
        <div class="bg-white p-8 rounded-md w-full">
            <div class=" flex items-center justify-between pb-6 ">
                <div>
                    <h2 class="text-gray-600 font-semibold text-2xl">Usuarios</h2>
                    <span class="text-sm">Todos los Usuarios</span>
                </div>
                <div class="flex items-center justify-between ">
                    <div>
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center px-3">
                                <span class="text-gray-500 sm:text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1.2em"
                                        viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <style>
                                            svg {
                                                fill: #d1d1d1
                                            }
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
                    </div>
                    <div class="lg:ml-40 ml-10 space-x-8">
                        <a href="{{ route('admin.users.create') }}"
                            class="bg-indigo-500 px-12 py-3 rounded-full text-white font-semibold tracking-wide cursor-pointer">
                            Añadir
                        </a>
                        <button
                            class="bg-indigo-500 px-12 py-3 rounded-full text-white font-semibold tracking-wide cursor-pointer border-none">Create</button>
                    </div>
                </div>
            </div>
            <div>
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                            <thead>
                                <tr>
                                    <th scope="col"
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <th scope="col"
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        NOMBRES
                                    </th>
                                    <th scope="col"
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        ESTADO
                                    </th>
                                    <th scope="col"
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        HABILIDADES
                                    </th>
                                    <th scope="col"
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        ACCIONES
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($users as $user)
                                <tbody>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4">
                                            {{ $user->id }}

                                        </td>
                                        <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                                            <div class="relative h-10 w-10">
                                                <img class="h-full w-full rounded-full object-cover object-center"
                                                    src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                    alt="" />
                                                <span
                                                    class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span>
                                            </div>
                                            <div class="text-sm">
                                                <div class="font-medium text-gray-700">{{ $user->name }}</div>
                                                <div class="text-gray-400">{{ $user->email }}</div>
                                            </div>
                                        </th>
                                        <td class="px-5 py-4">
                                            <span
                                                class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                                <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                                                Active
                                            </span>
                                        </td>
                                        <td class="px-5 py-4">
                                            <div class="flex gap-2">
                                                <span
                                                    class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600">
                                                    Design
                                                </span>
                                                <span
                                                    class="inline-flex items-center gap-1 rounded-full bg-indigo-50 px-2 py-1 text-xs font-semibold text-indigo-600">
                                                    Product
                                                </span>
                                                <span
                                                    class="inline-flex items-center gap-1 rounded-full bg-violet-50 px-2 py-1 text-xs font-semibold text-violet-600">
                                                    Develop
                                                </span>
                                            </div>
                                        </td>
                                        <td class="px-5 py-4">
                                            <div class="flex justify-start gap-4">
                                                <a href="{{ route('admin.users.show', $user) }}"
                                                    class="bg-blue-100 text-blue-500 hover:text-blue-600 hover:bg-blue-100 px-2 py-2 rounded-md flex items-center">
                                                    <i class="material-icons-outlined text-base">visibility</i>
                                                </a>
                                                <a href="{{ route('admin.users.edit', $user->id) }}"
                                                    class="bg-yellow-100 text-yellow-400 hover:text-yellow-600 hover:bg-yellow-100 px-2 py-2 rounded-md flex items-center">
                                                    <i class="material-icons-outlined text-base">edit</i>
                                                </a>
                                                <form action="{{ route('admin.users.eliminar', $user->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="bg-red-100 text-red-400 hover:text-red-600 hover:bg-red-100 px-2 py-2 rounded-md flex items-center"><i
                                                            class="material-icons-round text-base">delete_outline</i></button>
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
                                Showing 1 to 4 of 50 Entries
                            </span>
                            <div class="inline-flex mt-2 xs:mt-0">
                                <button
                                    class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-500 font-semibold py-2 px-4 rounded-l">
                                    Prev
                                </button>
                                &nbsp; &nbsp;
                                <button
                                    class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-500 font-semibold py-2 px-4 rounded-r">
                                    Next
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="flex items-center justify-center min-h-screen bg-gray-900">
        <div class="col-span-12">
            <div class="overflow-auto lg:overflow-visible ">
                <table class="table text-gray-400 border-separate space-y-6 text-sm">
                    <thead class="bg-gray-800 text-gray-500">
                        <tr>
                            <th class="p-3">Brand</th>
                            <th class="p-3 text-left">Category</th>
                            <th class="p-3 text-left">Price</th>
                            <th class="p-3 text-left">Status</th>
                            <th class="p-3 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-gray-800">
                            <td class="p-3">
                                <div class="flex align-items-center">
                                    <img class="rounded-full h-12 w-12  object-cover"
                                        src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80"
                                        alt="unsplash image">
                                    <div class="ml-3">
                                        <div class="">Appple</div>
                                        <div class="text-gray-500">mail@rgmail.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="p-3">
                                Technology
                            </td>
                            <td class="p-3 font-bold">
                                200.00$
                            </td>
                            <td class="p-3">
                                <span class="bg-green-400 text-gray-50 rounded-md px-2">available</span>
                            </td>
                            <td class="p-3 ">
                                <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                                    <i class="material-icons-outlined text-base">visibility</i>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
                                    <i class="material-icons-outlined text-base">edit</i>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
                                    <i class="material-icons-round text-base">delete_outline</i>
                                </a>
                            </td>
                        </tr>
                        <tr class="bg-gray-800">
                            <td class="p-3">
                                <div class="flex align-items-center">
                                    <img class="rounded-full h-12 w-12   object-cover"
                                        src="https://images.unsplash.com/photo-1423784346385-c1d4dac9893a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                                        alt="unsplash image">
                                    <div class="ml-3">
                                        <div class="">Realme</div>
                                        <div class="text-gray-500">mail@rgmail.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="p-3">
                                Technology
                            </td>
                            <td class="p-3 font-bold">
                                200.00$
                            </td>
                            <td class="p-3">
                                <span class="bg-red-400 text-gray-50 rounded-md px-2">no stock</span>
                            </td>
                            <td class="p-3">
                                <a href="#" class="text-gray-400 hover:text-gray-100  mr-2">
                                    <i class="material-icons-outlined text-base">visibility</i>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-gray-100 mx-2">
                                    <i class="material-icons-outlined text-base">edit</i>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-gray-100 ml-2">
                                    <i class="material-icons-round text-base">delete_outline</i>
                                </a>
                            </td>
                        </tr>
                        <tr class="bg-gray-800">
                            <td class="p-3">
                                <div class="flex align-items-center">
                                    <img class="rounded-full h-12 w-12   object-cover"
                                        src="https://images.unsplash.com/photo-1600856209923-34372e319a5d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2135&q=80"
                                        alt="unsplash image">
                                    <div class="ml-3">
                                        <div class="">Samsung</div>
                                        <div class="text-gray-500">mail@rgmail.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="p-3">
                                Technology
                            </td>
                            <td class="p-3 font-bold">
                                200.00$
                            </td>
                            <td class="p-3">
                                <span class="bg-yellow-400 text-gray-50  rounded-md px-2">start sale</span>
                            </td>
                            <td class="p-3">
                                <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                                    <i class="material-icons-outlined text-base">visibility</i>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-gray-100 mx-2">
                                    <i class="material-icons-outlined text-base">edit</i>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-gray-100 ml-2">
                                    <i class="material-icons-round text-base">delete_outline</i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}

    <div class="bg-sky-500 flex justify-center pb-4 pt-2">
        <span class="text-sm">Graph Evolution 2023</span>
    </div>

</x-app-layout>
