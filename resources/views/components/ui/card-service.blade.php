<div
    {{ $attributes->merge(['class' => ' bg-[#75757521] px-6 pt-6 pb-2 rounded-xl transform hover:scale-105 transition duration-500 hover:bg-[#75757548]']) }}>
    <h3 class="text-base mb-3 font-bold text-orange-500 2xl:text-lg">{{ $title }}</h3>

    <div class="relative">
        {{ $image_file }}
        <p class="absolute top-0 bg-[#cf0068] py-1 px-3 rounded-br-lg rounded-tl-lg">
            <svg width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="m5.8 21l1.6-7L2 9.2l7.2-.6L12 2l2.8 6.6l7.2.6l-3.2 2.8H18c-.7 0-1.4.1-2.1.4l2.2-1.9l-4.4-.4l-1.7-4l-1.7 4l-4.4.4l3.3 2.9l-1 4.3l3.8-2.3l.5.3c-.2.5-.4 1.1-.4 1.6L5.8 21M17 14v3h-3v2h3v3h2v-3h3v-2h-3v-3h-2Z" />
            </svg>
        </p>
    </div>

    <p class="mt-2 text-base  font-normal">
        {{ $description }}</p>

    <div class="my-2">
        <div class="flex space-x-1 items-center">
            <span>
                <svg class="h-4 w-4 text-orange-500 mb-1.5" viewBox="0 0 16 16">
                    <path fill="currentColor"
                        d="M12.32 8a3 3 0 0 0-2-.7H5.63A1.59 1.59 0 0 1 4 5.69a2 2 0 0 1 0-.25a1.59 1.59 0 0 1 1.63-1.33h4.62a1.59 1.59 0 0 1 1.57 1.33h1.5a3.08 3.08 0 0 0-3.07-2.83H8.67V.31H7.42v2.3H5.63a3.08 3.08 0 0 0-3.07 2.83a2.09 2.09 0 0 0 0 .25a3.07 3.07 0 0 0 3.07 3.07h4.74A1.59 1.59 0 0 1 12 10.35a1.86 1.86 0 0 1 0 .34a1.59 1.59 0 0 1-1.55 1.24h-4.7a1.59 1.59 0 0 1-1.55-1.24H2.69a3.08 3.08 0 0 0 3.06 2.73h1.67v2.27h1.25v-2.27h1.7a3.08 3.08 0 0 0 3.06-2.73v-.34A3.06 3.06 0 0 0 12.32 8z" />
                </svg>
            </span>
            <p class="text-sm">{{ $price }}</p>
        </div>
        <div class="w-full flex items-center pt-3">
            {{ $link }}
        </div>
    </div>
</div>
