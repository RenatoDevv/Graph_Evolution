<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-8 py-4 bg-indigo-700 border-transparent rounded-full font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-indigo-600 focus:bg-indigo-500 dark:focus:bg-white active:bg-indigo-700 focus:outline-none focus:ring-indigo-500 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
