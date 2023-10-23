<div class=" flex justify-between items-center mb-5">
    <div class="px-4 sm:px-0 w-full">
        <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100 text-center">{{ $title }}</h3>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400 text-center">
            {{ $description }}
        </p>
    </div>

    <div class="px-4 sm:px-0">
        {{ $aside ?? '' }}
    </div>
</div>
