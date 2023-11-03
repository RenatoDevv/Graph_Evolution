@extends('layout.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/contact.css') }}">
@endsection
@section('content')
    <div class="contact-content d-flex flex-column align-items-center">
        <div class="contact-presentation d-flex flex-column justify-content-center align-items-center"
            style="margin: 100px 0 50px0;">
            <div>
                <h2 class="m-4 contactP-title">Contactanos</h2>
            </div>
        </div>
        <div class="contact-socials d-flex flex-wrap align-items-center justify-content-center gap-3">
            <div class="card-socials social-one d-flex flex-column align-items-center gap-3 bg-transparent">
                <i class="bi bi-whatsapp"></i>
                <h2>WhatsApp</h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="https://web.whatsapp.com/" target="blank" class="button-message btn p-2 w-100">Mensaje Ahora</a>
            </div>
            <div class="card-socials social-two d-flex flex-column align-items-center gap-3 bg-transparent">
                <i class="bi bi-envelope-paper"></i>
                <h2>Mensaje</h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="mailto:prueba@gmail.com" class="btn button-message  p-2 w-100">Enviar Correo</a>
            </div>
            <div class="card-socials social-three d-flex flex-column align-items-center gap-3 bg-transparent">
                <i class="bi bi-phone-vibrate"></i>
                <h2>Telefono</h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="tel:99988877" class="btn button-message  p-2 w-100">Hacer Llamada </a>
            </div>
            <div class="card-socials social-four d-flex flex-column align-items-center gap-3 bg-transparent">
                <i class="bi bi-geo-alt"></i>
                <h2>Ubicacion</h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="#location" class="btn button-message p-2 w-100">Ver Ubicación </a>
            </div>
        </div>
        <div class="contact-form d-flex gap-5 w-75 justify-content-center align-items-center">
            <img src="{{ asset('img/robot.png') }}" class="img-fluid w-50" alt=""
                style="background-size: cover; objetc-fit: contain;" class="w-50" width="">
            <form class="row g-3 d-flex flex-column justify-content-center align-items-center" id="explorationForm"
                method="GET" action="">
                <h2 class="text-center">Envie un mensaje</h2>
                <div class="mb-3">
                    {{-- <label for="exampleFormControlInput1" class="form-label">Correo Electronico</label> --}}
                    <input type="text"
                        class="bg-transparent w-full rounded-md border-0 py-1.8 text-gray-300 ring-1 ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                        placeholder="Ingrese su Nombre" required>
                </div>
                <div class="mb-3">
                    {{-- <label for="exampleFormControlInput2" class="form-label">Telefono</label> --}}
                    <input type="email"
                        class="bg-transparent w-full rounded-md border-0 py-1.8 text-gray-300 ring-1 ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                        placeholder="Ingrese su correo" required>
                </div>
                <div class="mb-3">
                    {{-- <label for="validationTextarea" class="form-label">Mensaje</label> --}}
                    <textarea
                        class="bg-transparent w-full rounded-md border-0 py-1.8 text-gray-300 ring-1 ring-gray-700 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                        placeholder="Escriba su mensaje" required></textarea>
                </div>
                <div class="form-check form-switch d-flex gap-2">
                    <input type="checkbox"
                        class="bg-transparent relative h-5 w-5 cursor-pointer rounded-md border border-blue-500 transition-all before:absolute before:-translate-x-2/4 before:rounded-full before:bg-blue-500 before:opacity-0 before:transition-opacity checked:border-indigo-500 checked:bg-indigo-500 hover:before:opacity-10 "
                        id="checkbox" checked />
                    <label class="form-check-label fs-6" for="flexSwitchCheckChecked">Aceptar <a href="">Terminos y
                            condiciones</a></label>
                </div>
                <div class="mb-3 d-flex justify-content-center">
                    <button type="submit" class="btn y p-2 w-50 btn-md" style="background: #cf00be">Confirmar</button>
                </div>
            </form>
        </div>
        <div class="contact-map" id="location">
            <h2 class="text-center">----</h2>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6819.718461320845!2d-71.53678592345307!3d-16.40258168360523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424bd345e6f8a7%3A0x767df0b4c65fbbb7!2sGraph%20Evolution%20S.R.L.!5e0!3m2!1ses!2spe!4v1695750069185!5m2!1ses!2spe"
                width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection
@section('scripts')
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
