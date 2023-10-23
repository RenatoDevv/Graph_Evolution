@props(['active'])

@php
    $classes = $active ?? false ? 'inline-flex  justify-between items-center dark:border-indigo-600 text-md px-8 py-4 bg-sky-700  font-bold leading-5 text-gray-200 dark:text-gray-100 focus:outline-none  transition duration-150 ease-in-out' : 'inline-flex  justify-between items-center border-transparent px-8 py-4 text-md font-bold leading-5 text-gray-200 dark:text-gray-100 hover:bg-sky-700 dark:hover:text-gray-300 dark:hover:border-gray-700 focus:outline-none transition duration-150 ease-in-out w-full';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
