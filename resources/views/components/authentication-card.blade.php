<div class="min-h-screen flex flex-col justify-center sm:justify-center items-center pt-6 sm:pt-0 bg-slate-50 dark:bg-gray-900"
    style="background-image: url('https://preview.keenthemes.com/metronic/theme/html/demo6/dist/assets/media/bg/bg-2.jpg');">
    <div class="flex flex-col items-center">
        {{ $logo }}
        <h1 class="text-gray-400 text-2xl font-bold">{{$title}}</h1>
        <p class="text-gray-500 font-medium">{{$info}}</p>
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-6 bg-transparent  overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
