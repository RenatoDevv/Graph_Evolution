@extends('layout.layout')
@section('title', 'contacto')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/contact.css') }}">
@endsection
@section('content')
    <div class="contact-presentation m-auto">
        <div>
            <h2 class=" contactP-title text-center">Contactanos</h2>
        </div>
    </div>

    <div class="contact-socials d-flex flex-wrap items-center justify-center gap-3 m-auto w-full">
        <div
            class="max-w-sm bg-[#75757521] px-6 pt-6 pb-2 rounded-xl transform hover:scale-105 transition duration-500 hover:bg-[#75757548] flex flex-col items-center">
            <h3 class="mb-3 text-2xl font-bold">Facebook</h3>
            <div class="rounded-2xl bg-[#75757548] p-2 m-auto">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="50"
                    height="50" viewBox="0 0 24 24" stroke-width="2" stroke="#cf0068" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                    <path d="M3 7l9 6l9 -6" />
                </svg>
            </div>
            <h1 class="mt-2 text-[#fff] text-xl font-semibold cursor-pointer">

            </h1>
            <div class="my-3">
                <div class="w-full flex items-center pt-3">
                    <a href="#" class="section-button">
                        Enviar Mensaje
                        <svg width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l14 0" />
                            <path d="M13 18l6 -6" />
                            <path d="M13 6l6 6" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div
            class="max-w-sm bg-[#75757521] px-6 pt-6 pb-2 rounded-xl transform hover:scale-105 transition duration-500 hover:bg-[#75757548] flex flex-col items-center">
            <h3 class="mb-3 text-2xl font-bold">Whatsapp</h3>
            <div class="rounded-2xl bg-[#75757548] p-2 m-auto">
                <svg width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="#cf0068" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                    <path
                        d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                </svg>
            </div>
            <div class="my-3">
                <div class="w-full flex items-center pt-3">
                    <a href="#" class="section-button text-center w-full ">
                        Enviar Mensaje
                        <svg width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l14 0" />
                            <path d="M13 18l6 -6" />
                            <path d="M13 6l6 6" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div
            class="max-w-sm bg-[#75757521] px-6 pt-6 pb-2 rounded-xl transform hover:scale-105 transition duration-500 hover:bg-[#75757548] flex flex-col items-center">
            <h3 class="mb-3 text-2xl font-bold">Facebook</h3>
            <div class="rounded-2xl bg-[#75757548] p-2 m-auto">
                <svg width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="#cf0068" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                </svg>
            </div>
            <div class="my-3">
                <div class="w-full flex items-center pt-3">
                    <a href="#" class="section-button ">
                        Enviar Mensaje
                        <svg width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l14 0" />
                            <path d="M13 18l6 -6" />
                            <path d="M13 6l6 6" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <div class="contact-form d-flex gap-5 max-w-4xl justify-center items-center m-auto bg-[#75757521]">
        <img src="{{ asset('img/robot.png') }}" class="form-image" alt=""
            style="background-size: cover; objetc-fit: contain;" class="w-50" width="">
        <form class="form-ct row g-3 d-flex flex-column justify-content-center align-items-center" id="explorationForm"
            method="GET" action="">
            <h2 class="text-center section-subtitle">Envie un mensaje</h2>
            <div class="mb-3">
                <input type="text"
                    class="bg-transparent w-full rounded-md border-0 py-1.8 text-gray-300 ring-1 ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-600 sm:text-sm"
                    placeholder="Ingrese su Nombre" required>
            </div>
            <div class="mb-3">
                <input type="email"
                    class="bg-transparent w-full rounded-md border-0 py-1.8 text-gray-300 ring-1 ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-600 sm:text-sm"
                    placeholder="Ingrese su correo" required>
            </div>
            <div class="mb-3">
                <textarea
                    class="bg-transparent w-full rounded-md border-0 py-1.8 text-gray-300 ring-1 ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-600 sm:text-sm"
                    placeholder="Escriba su mensaje" required></textarea>
            </div>
            <div class="form-check d-flex gap-2 w-full">
                <input type="checkbox"
                    class="bg-transparent relative h-5 w-5 cursor-pointer rounded-md border border-pink-500 transition-all before:absolute before:-translate-x-2/4 before:rounded-full before:bg-pink-500 before:opacity-0 before:transition-opacity checked:border-pink-500 checked:bg-pink-500 hover:before:opacity-10 "
                    id="checkbox" checked />
                <label class="form-check-label text-sm w-full" for="flexSwitchCheckChecked">Aceptar <a
                        href="#">Terminos y
                        condiciones</a></label>
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <button class="section-button w-full">
                    Enviar
                </button>
            </div>
        </form>
    </div>
    <div class="contact-map w-screen container" id="location">
        <h2 class="text-center section-subtitle">Visitenos aqui</h2>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6819.718461320845!2d-71.53678592345307!3d-16.40258168360523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424bd345e6f8a7%3A0x767df0b4c65fbbb7!2sGraph%20Evolution%20S.R.L.!5e0!3m2!1ses!2spe!4v1695750069185!5m2!1ses!2spe"
            width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/ct-reveal.js') }}"></script>
    <script>
        var button_save = document.getElementById('explorationForm');
        button_save.addEventListener("submit", function(event) {
            event.preventDefault();
            Swal.fire({
                title: 'Felicitaciones!!',
                text: "Se envio sus datos correctamente",
                icon: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar',
                showCloseButton: true
            })
        });
    </script>
@endsection
