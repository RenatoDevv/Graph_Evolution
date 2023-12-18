{{-- Boton usado para el formularios de envio en el Back End --}}

<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'flex items-center px-14 py-2  border-transparent font-normal text-white transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
