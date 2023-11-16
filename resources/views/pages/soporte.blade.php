@extends('layout.layout')
@section('title', 'Servicios')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/service.css') }}">
@endsection
@section('content')
    <section>
        <div class="w-full mx-auto px-5 bg-transparent ">
            <div class="flex flex-col items-center">
                <h2 class="font-bold text-5xl mt-5 tracking-tight">
                    Preguntas Frecuentes
                </h2>
                <p class="text-neutral-300 text-xl mt-3">
                    Resuelva sus dudas
                </p>
            </div>
            <div class="grid divide-y divide-neutral-500 max-w-3xl mx-auto mt-8 transition-all">
                <div class="py-5">
                    <details class="group">
                        <summary
                            class="flex accordion transition justify-between items-center font-medium cursor-pointer list-none">
                            <span>Que tipo de formato debo enviar para la impresion de Banner, Volantes y Tarjetas ?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-neutral-400 mt-3 group-open:animate-fadeIn transition">
                            We offers a variety of billing options, including monthly and annual subscription plans,
                            as well as pay-as-you-go pricing for certain services. Payment is typically made through a
                            credit
                            card or other secure online payment method.
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span>Cómo se comunicarán el progreso del proyecto si contrataste ?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-neutral-400 mt-3 group-open:animate-fadeIn">
                            We offers a 30-day money-back guarantee for most of its subscription plans. If you are not
                            satisfied with your subscription within the first 30 days, you can request a full refund.
                            Refunds
                            for subscriptions that have been active for longer than 30 days may be considered on a
                            case-by-case
                            basis.
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                            <span>Al contratar un servicio sino tengo diseño incluye ello ?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="text-neutral-400 mt-3 group-open:animate-fadeIn">
                            We offers a 30-day money-back guarantee for most of its subscription plans. If you are not
                            satisfied with your subscription within the first 30 days, you can request a full refund.
                            Refunds
                            for subscriptions that have been active for longer than 30 days may be considered on a
                            case-by-case
                            basis.
                        </p>
                    </details>
                </div>

            </div>
        </div>
    </section>
@endsection
