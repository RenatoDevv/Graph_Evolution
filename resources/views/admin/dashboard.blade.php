@extends('layout.adminLayout')
@section('title', 'Dashboard')
@section('css')
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <style>
        .bg-info {}

        .container-info {
            grid-column: 1/3;

        }

        .box_container {
            display: block
        }

        .arrow_li {
            color: #ff0890;
        }

        .arrow_li:hover {
            transform: scale(1.2);
            color: #ff0890;
            font-weight: bold;
            filter: drop-shadow(5px 0px 5px #ff0890);
        }

        .icon-box {
            font-size: 100px;
            font-weight: bold;
        }

        @media screen and (max-width: 1200px) {
            .box_container {
                background: #ff0890;
            }

            .icon-box {
                font-size: 30px;
            }

            .box_title {
                font-size: 16px;
            }

            .arrow_li {
                font-size: 13px;
            }
        }
    </style>
@endsection
@section('content')
    <div class="">
        <h3>👋 Bienvenido al panel de Administrador</h3>
    </div>
    <div class="">
        <p class="">Empiece a explorar la interfaz como un super admin</p>
    </div>
    <div class="w-100 d-flex container-info bg-transparent gap-4 justify-content-between pb-3 shadow-none">
        <div
            class="box_container  bg-primary-subtle rounded pt-4 pb-4 d-flex align-items-center justify-content-center gap-3 w-25 shadow">
            <i class="bi bi-copy text-primary icon-box"></i>
            <div class="icon">
                <h4 class="text-primary fw-bold box_title">Total Paginas</h4>
                <p class="m-0 text-primary">Total: <span class="fw-bold">15</span></p>
                <a href="" class="arrow_li float-end d-flex align-items-center gap-2 pt-3">Ver más <i
                        class="bi bi-arrow-right fs-3 fw-bold "></i></a>
            </div>
        </div>
        <div
            class="box_container  bg-danger-subtle rounded  pt-3 pb-3 d-flex align-items-center justify-content-center gap-3 w-25 shadow">
            <i class="bi bi-people text-danger icon-box"></i>
            <div class="icon">
                <h4 class="fw-bold text-danger box_title">Administrador</h4>
                <p class="m-0 text-danger">Total: <span class="fw-bold">12</span></p>
                <a href="" class="arrow_li float-end d-flex align-items-center gap-2 pt-3">Ver más <i
                        class="bi bi-arrow-right fs-3 fw-bold "></i></a>
            </div>
        </div>
        <div
            class="box_container  bg-success-subtle rounded pt-3 pb-3 d-flex align-items-center justify-content-center gap-3 w-25 shadow">
            <i class="bi bi-globe2 text-success icon-box"></i>
            <div class="icon">
                <h4 class="fw-bold text-success box_title">Mi Sitio</h4>
                <p class="m-0 text-success"><span class="fw-bold">Graph Evolution</span></p>
                <a href="" class="arrow_li float-end d-flex align-items-center gap-2 pt-3">Ver más <i
                        class="bi bi-arrow-right fs-3 fw-bold"></i></a>
            </div>
        </div>
        <div
            class="box_container  bg-warning-subtle rounded pt-3 pb-3 d-flex align-items-center justify-content-center gap-3 w-25 shadow ">
            <i class="bi bi-printer text-warning icon-box"></i>
            <div class="icon">
                <h4 class="fw-bold text-warning box_title">Boleta</h4>
                <p class="m-0 text-warning"><span class="fw-bold">--_-_</span></p>
                <a href="" class="arrow_li float-end d-flex align-items-center gap-2 pt-3" onclick="window.print();"">Ver más <i
                        class="bi bi-arrow-right fs-3 fw-bold" ></i></a>
            </div>
        </div>
    </div>
    <section class="d-flex flex-column">
        <h2>Analisis de visitas de pagina web</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum atque, ab quisquam assumenda nobis quasi id
            ducimus debitis, pariatur sunt hic dolor suscipit cum culpa iste voluptatem rerum aliquid quidem?</p>
        <img src="{{ asset('img/admin/anality.png') }}" alt="" width="100%">
    </section>
    <section class="d-flex flex-column gap-2">
        <h3>Web version <strong>Escritorio - Mobil</strong> </h3>
        <div class="d-flex align-items-center justify-content-center gap-5">
            <img src="{{ asset('img/admin/destok.png') }}" alt="" width="50%" class="rounded img-fluid ">
            <img src="{{ asset('img/admin/mobile.png') }}" alt="" width="25%" class="rounded img-fluid ">
        </div>
    </section>
    <section class="bg-info p-5 d-flex justify-content-center align-items-center">
        <p class="m-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum atque, ab quisquam assumenda
            nobis quasi id
            ducimus debitis, pariatur sunt hic dolor suscipit cum culpa iste voluptatem rerum aliquid quidem?</p>
    </section>
@endsection
@section('scripts')
    <script></script>
@endsection
