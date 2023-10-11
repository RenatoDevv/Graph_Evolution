@extends('layout.layout')
@section('css')
    <style>
        .contact-content {
            margin: 0 -150px;
        }

        .contact-presentation {
            width: 70%;
            margin: 100px 0 50px 0;
        }

        .contact-content .contact-presentation .contactP-title {
            font-size: 70px;
            color: var(--color-white);
            width: 0;
            overflow: hidden;
            white-space: nowrap;
            margin: 0 auto;
            border-right: 0.15em solid #1076b9;
            animation: typing 1s steps(11) 1s 1 normal both, blink 1s steps(1) infinite;
        }

        @keyframes typing {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        @keyframes blink {
            50% {
                border-color: transparent;
            }
        }

        .contact-socials {
            width: 100%;
            height: 100vh;
            margin: 50px;
            padding: 150px 0 300px 0;
            height: auto;
            clip-path: polygon(0 10%, 100% 0, 100% 100%, 0 97%);
            background: linear-gradient(327.21deg, rgba(33, 0, 75, 0.24) 3.65%, rgba(60, 0, 136, 0) 40.32%), linear-gradient(245.93deg, rgba(209, 21, 111, 0.16) 0%, rgba(209, 25, 80, 0) 36.63%), linear-gradient(147.6deg, rgba(58, 19, 255, 0) 29.79%, rgba(98, 19, 255, 0.01) 85.72%), #13111C;
        }

        .contact-socials .card-socials {
            width: 300px;
            height: auto;
            padding: 20px;
            transition: .3s ease;
        }

        .contact-socials .card-socials:hover {
            transform: scale(1.07);
            cursor: pointer;
            box-shadow: 0 0 .5px .5px #cf00be;
            border-radius: 10px;
        }

        .contact-socials .card-socials i {
            color: #cf00be;
            font-size: 70px;
            padding: 18px 30px;
        }

        .card-socials .button-message {
            border: 1px solid #cf00be;
            color: #cf00be;
        }

        .card-socials .button-message:hover {
            background: #cf00be;
            color: #ffffff
        }

        .contact-content .contact-form {
            padding: 50px;
            border-radius: 18px;
        }


        .contact-map {
            width: 100%;
            padding: 200px 0px;
        }

        .contact-map iframe {}

        @media only screen and (max-width: 1200px) {
            .contact-content {
                margin: 0 -50px;
            }

            .contact-socials {
                margin: 25px;
                padding: 150px 0 300px 0;
            }
        }

        @media only screen and (max-width: 700px) {
            .contact-content {
                margin: 0 -50px;

            }

            .contact-form {
                padding: 20px;
                flex-direction: column;
                justify-content: center;
            }

            .contact-form form {
                width: 100%;
            }

            .contact-socials {
                margin: 1px;
                padding: 150px 0 300px 0;
            }

            .contact-form .imageForm {
                display: none;
            }

            .contact-form form {}

        }

        @media only screen and (max-width: 500px) {
            body {
                padding: 0 1.25rem;
                /*20px*/
            }

            .contact-form {
                flex-direction: column;
            }
        }

        /*
                                            @media only screen and (max-width: 400px) {
                                                .home-content {
                                                    gap: 20px;
                                                    margin-top: 50px;
                                                    margin-bottom: 100px;
                                                }

                                                .home-content .home-text {
                                                    display: flex;
                                                    align-items: center;
                                                    width: 100%;
                                                    gap: 20px;
                                                }

                                                .home-content .home-text .home-title {
                                                    font-size: 2.6rem;
                                                }

                                                .contact-content .contact-form {
                                                    padding: 0;
                                                }
                                            } */
    </style>
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
            <form class="row g-3 d-flex flex-column justify-content-center align-items-center"
                id="explorationForm" method="GET" action="">
                <h2 class="text-center">Envie un mensaje</h2>
                <div class="mb-3">
                    {{-- <label for="exampleFormControlInput1" class="form-label">Correo Electronico</label> --}}
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    {{-- <label for="exampleFormControlInput2" class="form-label">Telefono</label> --}}
                    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Telefono"
                        required>
                </div>
                <div class="mb-3">
                    {{-- <label for="validationTextarea" class="form-label">Mensaje</label> --}}
                    <textarea class="form-control" placeholder="Escriba su mensaje" required></textarea>
                </div>
                <div class="form-check form-switch d-flex gap-2">
                    <input class="form-check-input fs-5" type="checkbox" id="flexSwitchCheckChecked" checked>
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

        // saveForm.addEventListener('submit', function(event) {
        //     event.preventDefault();
        //     Swal.fire(
        //     'The Internet?',
        //     'That thing is still around?',
        //     'question'
        // )
        // })

        // Swal.fire(
        //     'The Internet?',
        //     'That thing is still around?',
        //     'question'
        // )
    </script>
@endsection
