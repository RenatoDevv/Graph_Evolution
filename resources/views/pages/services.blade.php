@extends('layout.layout')
@section('title', 'Servicios')
@section('css')
    <style>
        .container {
            max-width: 55rem;
            width: auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 100px;
            margin-bottom: 50px;
            gap: 20px;
        }

        .container .services-description {
            font-size: 25px;
        }

        .container .container-button {
            text-decoration: none;
            color: #ffffff;
            background: var(--color-pink);
            border-radius: var(--corner-radius-buttom);
            padding: 15px 60px;
            border: none;
            transition: var(--animation-hover-buttom);
            font-size: 20px;
            box-shadow: 0px 10px 34px #000000;
        }

        .container .container-button:hover {
            opacity: 0.9;
            box-shadow: var(--shadow-color-buttom);
        }

        .services-contaiener {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-bottom: 100px;
        }

        .services-contaiener .container-items {
            width: 350px;
            /* background: #4948499f; */
            filter: grayscale(0.1);
            border-radius: 20px;
            /* box-shadow: 0px 8px 24px #cf00be67; */
            padding: 25px;
            transition: .3 ease;
        }

        .services-contaiener .container-items:hover {
            cursor: pointer;
            transform: scale(1.1);
            box-shadow: 0px 8px 24px #13121367;
        }
    </style>
@endsection
@section('content')
    <section class="container">
        <h2 class="text-center fw-bold" style="font-size: 65px">Explore nuestros servicios</h2>
        <p class="services-description text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quas dolor
            suscipit deleniti recusandae deserunt</p>
        <a href="{{ route('contact') }}" class="container-button">CONTACTANOS</a>
    </section>
    <section class="services-contaiener">
        <div class="card cursor-pointer border-transparent" style="width: 18rem;">
            <img src="{{ asset('img/banner1.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><strong>Banner</strong></h5>
                <p class="card-text m-0">Precio Aprox: $10 PEN</p>
                <div class="bg-info">
                    <i class="bi bi-star-fill" style="font-size: 15px; color: #dbbc0d;"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px; color: #c5a806;" ></i>
                    <i class="bi bi-star-fill" style="font-size: 15px; color: #dbbc0d;" ></i>
                    <i class="bi bi-star-fill" style="font-size: 15px; color: #dbbc0d;" ></i>
                    <i class="bi bi-star-fill" style="font-size: 15px; color: #dbbc0d;" ></i>
                </div>
                <a href="#" class="btn btn-primary"><i class="bi bi-box-arrow-in-up-right"></i></a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/banner1.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><strong>Banner</strong></h5>
                <p class="card-text m-0">Precio Aprox: $10 PEN</p>
                <div>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                </div>
                <a href="#" class="btn btn-primary"><i class="bi bi-box-arrow-in-up-right"></i></a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/banner1.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><strong>Banner</strong></h5>
                <p class="card-text m-0">Precio Aprox: $10 PEN</p>
                <div>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                </div>
                <a href="#" class="btn btn-primary"><i class="bi bi-box-arrow-in-up-right"></i></a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/banner1.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><strong>Banner</strong></h5>
                <p class="card-text m-0">Precio Aprox: $10 PEN</p>
                <div>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                </div>
                <a href="#" class="btn btn-primary"><i class="bi bi-box-arrow-in-up-right"></i></a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/banner1.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><strong>Banner</strong></h5>
                <p class="card-text m-0">Precio Aprox: $10 PEN</p>
                <div>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                </div>
                <a href="#" class="btn btn-primary"><i class="bi bi-box-arrow-in-up-right"></i></a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/banner1.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><strong>Banner</strong></h5>
                <p class="card-text m-0">Precio Aprox: $10 PEN</p>
                <div>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                </div>
                <a href="#" class="btn btn-primary"><i class="bi bi-box-arrow-in-up-right"></i></a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/banner1.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><strong>Banner</strong></h5>
                <p class="card-text m-0">Precio Aprox: $10 PEN</p>
                <div>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                </div>
                <a href="#" class="btn btn-primary"><i class="bi bi-box-arrow-in-up-right"></i></a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/banner1.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><strong>Banner</strong></h5>
                <p class="card-text m-0">Precio Aprox: $10 PEN</p>
                <div>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                </div>
                <a href="#" class="btn btn-primary"><i class="bi bi-box-arrow-in-up-right"></i></a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/banner1.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><strong>Banner</strong></h5>
                <p class="card-text">Precio Aprox: $10 PEN</p>
                <div>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                </div>
                <a href="#" class="btn btn-primary"><i class="bi bi-box-arrow-in-up-right"></i></a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/banner1.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><strong>Banner</strong></h5>
                <p class="card-text m-0">Precio Aprox: $10 PEN</p>
                <div>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                </div>
                <a href="#" class="btn btn-primary"><i class="bi bi-box-arrow-in-up-right"></i></a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/banner1.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><strong>Banner</strong></h5>
                <p class="card-text m-0">Precio Aprox: $10 PEN</p>
                <div>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                    <i class="bi bi-star-fill" style="font-size: 15px"></i>
                </div>
                <a href="#" class="btn btn-primary"><i class="bi bi-box-arrow-in-up-right"></i></a>
            </div>
        </div>
    </section>
@endsection
