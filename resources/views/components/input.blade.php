@props(['disabled' => false])

<input style="background: rgba(175, 175, 175, 0.123)" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'pl-4 placeholder:text-gray-400 text-gray-400 border-none placeholder:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-full shadow-sm',
]) !!}>
