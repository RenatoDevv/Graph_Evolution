@props(['submit'])

<div {{ $attributes->merge(['class' => 'flex flex-col items-center ']) }}>
    <x-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-section-title>

    <div class="w-2/4 bg-white rounded-lg shadow-lg">
        <form wire:submit="{{ $submit }}">
            <div
                class="px-4 py-5 dark:bg-gray-800 sm:p-6 bg-white{{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
                <div class="flex flex-col gap-6">
                    {{ $form }}
                </div>
            </div>

            @if (isset($actions))
                <div class="flex items-center justify-end px-4 py-3 dark:bg-gray-800 text-right sm:px-6 ">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
