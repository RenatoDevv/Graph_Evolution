<x-form-section submit="updateProfileInformation">
    <x-slot name="title" class="text-center">
        {{ __('Informacion del perfil') }}
    </x-slot>

    <x-slot name="description" class="text-center">
        {{ __('Actualice la información del perfil y la dirección de correo electrónico de su cuenta.') }}
    </x-slot>

    <x-slot name="form">
        <div class="relative max-w-md mx-auto md:max-w-2xl min-w-0 break-words bg-white w-full mb-6 mt-16">
            <div class="px-6">
                <div class="flex flex-wrap justify-center">
                    <div class="w-full flex justify-center">
                        {{-- imagen de foto de perfil --}}
                        <div class="relative">
                            <img src="{{ asset('img/admin/perfil.jpg') }}"
                                class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]" />
                        </div>
                    </div>
                    <div class="w-full text-center mt-28">

                    </div>
                </div>
                <div class="text-center mt-2">
                    <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">
                        <!-- Name -->
                        <div class="col-span-6 sm:col-span-4 flex flex-col items-center">
                            <x-label for="name" value="{{ __('Nombres') }}" />
                            <x-input id="name" type="text" class="mt-1 w-2/5 text-center"
                                wire:model="state.name" required autocomplete="name" />
                            <x-input-error for="name" class="mt-2" />
                        </div>
                    </h3>
                    <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                        <!-- Correo electronico dle usuario-->
                        <div class="flex flex-col items-center">
                            <x-label for="email" value="{{ __('Correo Electronico') }}" />
                            <x-input id="email" type="email" class="mt-1 block w-2/5 text-center"
                                wire:model="state.email" required autocomplete="username" />
                            <x-input-error for="email" class="mt-2" />
                            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) &&
                                    !$this->user->hasVerifiedEmail())
                                <p class="text-sm mt-2 dark:text-white">
                                    {{ __('Su dirección de correo electrónico no está verificada.') }}

                                    <button type="button"
                                        class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                        wire:click.prevent="sendEmailVerification">
                                        {{ __('Haga clic aquí para volver a enviar el correo electrónico de verificación.') }}
                                    </button>
                                </p>

                                @if ($this->verificationLinkSent)
                                    <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                        {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.') }}
                                    </p>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
                <div class="mt-6 py-6 border-t border-slate-200 text-center">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full px-4">
                            <p class="font-sm leading-relaxed text-slate-600 mb-4">Graph Evolution</p>
                        </div>
                    </div>
                </div>

                <x-slot name="actions">
                    <x-action-message class="mr-3" on="saved">
                        {{ __('Datos Actualizados.') }}
                    </x-action-message>

                    <x-button wire:loading.attr="disabled" wire:target="photo">
                        {{ __('Guardar') }}
                    </x-button>
                </x-slot>
            </div>
        </div>

        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{ photoName: null, photoPreview: null }" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden" wire:model.live="photo" x-ref="photo"
                    x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-label for="photo" value="{{ __('Foto Perfil') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}"
                        class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                        x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Seleccione nueva foto') }}
                </x-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Eliminar Foto') }}
                    </x-secondary-button>
                @endif

                <x-input-error for="photo" class="mt-2 bg-red-500" />
            </div>
        @endif
    </x-slot>


</x-form-section>
