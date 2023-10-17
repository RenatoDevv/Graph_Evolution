@extends('layout.adminLayout')

@section('title', 'Pages')
@section('css')
    <style>
        .head {}

        .container-info {
            grid-column: 1/3;

        }

        .buttonEdit {
            background: #EEE5FF;
            color: #8950FC;
        }

        .buttonEdit:hover {
            background: #8950FC;
            color: #EEE5FF;
        }

        .buttonDelete {
            background: #FFE2E5;
            color: #F64E60;
        }

        .buttonDelete:hover {
            background: #F64E60;
            color: #FFE2E5;
        }

        .updateUser {
            background: #8950FC;
            color: #EEE5FF;

        }

        .updateUser:hover {
            background: #8950fc7e;
            color: #8950FC;
        }

        .cancelUser {
            background: #F64E60;
            color: #ffffff;

        }

        .cancelUser:hover {
            background: #f64e5f85;
            color: #F64E60;
        }
    </style>
@endsection

@section('content')
    <div class="">
        <h3>👋 Paginas</h3>
    </div>
    <div class="">
        <p class="">Empiece a explorar la interfaz como un super admin</p>
    </div>
    <section class="container-info d-flex flex-column">
        <h4>Paginas</h4>
        <table class="table table-hover">
            <thead class="table-secondary">
                <tr>
                    <th scope="col" class="">ID</th>
                    <th scope="col" class="">NOMBRE</th>
                    <th scope="col" class="">DESCRIPCION</th>
                    <th scope="col" class="">ESTADO</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Lorem ipsu</td>
                    <td class=""><span style="background:#C9F7F5; color:#1BC5BD; padding: 4px 25px;" class="rounded">
                            activo </span></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td class="w-auto"><span style="background:#C9F7F5; color:#1BC5BD; padding: 4px 25px;" class="rounded">
                            activo </span></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td class=""><span style="background:#C9F7F5; color:#1BC5BD; padding: 4px 25px;" class="rounded">
                            activo </span></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td class=""><span style="background:#C9F7F5; color:#1BC5BD; padding: 4px 25px;" class="rounded">
                            activo </span></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td class=""><span style="background:#C9F7F5; color:#1BC5BD; padding: 4px 25px;" class="rounded">
                            activo </span></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td class=""><span style="background:#C9F7F5; color:#1BC5BD; padding: 4px 25px;" class="rounded">
                            activo </span></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td class=""><span style="background:#C9F7F5; color:#1BC5BD; padding: 4px 25px;" class="rounded">
                            activo </span></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td class=""><span style="background:#C9F7F5; color:#1BC5BD; padding: 4px 25px;" class="rounded">
                            activo </span></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td class=""><span style="background:#C9F7F5; color:#1BC5BD; padding: 4px 25px;" class="rounded">
                            activo </span></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td class=""><span style="background:#C9F7F5; color:#1BC5BD; padding: 4px 25px;" class="rounded">
                            activo </span></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td class=""><span style="background:#C9F7F5; color:#1BC5BD; padding: 4px 25px;" class="rounded">
                            activo </span></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td class=""><span style="background:#C9F7F5; color:#1BC5BD; padding: 4px 25px;" class="rounded">
                            activo </span></td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="bg-info p-5 d-flex justify-content-center align-items-center">
        <p class="m-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum atque, ab quisquam assumenda
            nobis quasi id
            ducimus debitis, pariatur sunt hic dolor suscipit cum culpa iste voluptatem rerum aliquid quidem?</p>
    </section>
@endsection
