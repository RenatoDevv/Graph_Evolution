@props(['active'])

@php
    $classes = $active ?? false ? 'w-full inline-flex  items-center text-md py-4 bg-[#ffffff12]  text-gray-300 dark:text-gray-100 focus:text-gray-300  transition duration-150 ease-in-out rounded-lg pl-5' : 'w-full inline-flex items-center border-transparent px-8 py-4 text-md text-[#8391a2] hover:text-gray-300 hover:bg-[#ffffff12] dark:text-gray-400  dark:hover:text-gray-300 dark:hover:border-gray-700 hover:text-gray-300  transition duration-150 ease-in-out w-full rounded-lg pl-5 active:text-gray-300';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
