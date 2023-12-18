{{-- Boton usado en las redirecciones navegacion en el Back End --}}

<a
    {{ $attributes->merge(['class' => 'py-2 px-14 border-2 border-violet-600 text-base flex items-center justify-center items-center text-center w-auto rounded-lg bg-violet-600 hover:bg-violet-700  text-white duration-200']) }}>{{ $slot }}
</a>
