<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />
        <x-slot name="title">
            Administrador
        </x-slot>
        <x-slot name="info">
            Ingrese sus datos para iniciar sesión en su cuenta
        </x-slot>
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus autocomplete="username" placeholder="Email" />
            </div>

            <div class="mt-4">
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" placeholder="Contraseña" />
            </div>

            <div class=" mt-4 flex justify-between">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-400 dark:text-gray-400">{{ __('Acuérdate de mí') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="font-bold text-sm text-gray-400 dark:text-gray-500 hover:text-gray-600 dark:hover:text-gray-100 rounded-md focus:outline-none"
                        href="{{ route('password.request') }}">
                        {{ __('Olvidaste tu contraseña?') }}
                    </a>
                @endif
            </div>

            <div class="flex flex-col items-center justify-center mt-4 gap-4">
                <x-button class="rounded-full bg-indigo-700 hover:bg-indigo-600 focus:bg-indigo-500 py-3">
                    {{ __('Iniciar Sesión') }}
                </x-button>

                <hr class="bg-gray-300">
                <div class=" flex gap-5">
                    <span class="text-gray-400">Aun no tienes cuenta?</span>
                    <a href="{{ route('register') }}"
                        class="text-gray-300 font-bold underline hover:text-gray-400">Registrarme</a>
                </div>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
