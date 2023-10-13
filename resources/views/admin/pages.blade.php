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
            color: #FFE2E5;

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
        <h1></h1>
        <table class=" table  table-hover ">
            <thead class="head table-secondary">
                <tr>
                    <th scope="col" style="" class="fw-bold">ID</th>
                    <th scope="col" style="" class="fw-bold">NOMBRES</th>
                    <th scope="col" style="" class="fw-bold">TELEFONO</th>
                    <th scope="col" style="" class="fw-bold">EMAIL</th>
                    <th scope="col" class="text-center" style="background: #">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="d-flex align-items-center justify-content-center gap-4 p-1">
                        <a href="" class="btn buttonEdit " data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                class="bi bi-pencil-square"></i></a>
                        <form action="" id="DeleteUser">
                            <button type="button" class="buttonDelete btn pl-2 pr-2"><i
                                    class="bi bi-trash3-fill"></i></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="d-flex align-items-center justify-content-center gap-4 p-1">
                        <a href="" class="btn buttonEdit " data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                class="bi bi-pencil-square"></i></a>
                        <form action="" id="DeleteUser">
                            <button type="button" class="buttonDelete btn pl-2 pr-2"><i
                                    class="bi bi-trash3-fill"></i></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="d-flex align-items-center justify-content-center gap-4 p-1">
                        <a href="" class="btn buttonEdit " data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                class="bi bi-pencil-square"></i></a>
                        <form action="" id="DeleteUser">
                            <button type="button" class="buttonDelete btn pl-2 pr-2"><i
                                    class="bi bi-trash3-fill"></i></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="d-flex align-items-center justify-content-center gap-4 p-1">
                        <a href="" class="btn buttonEdit " data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                class="bi bi-pencil-square"></i></a>
                        <form action="" id="DeleteUser">
                            <button type="button" class="buttonDelete btn pl-2 pr-2"><i
                                    class="bi bi-trash3-fill"></i></button>
                        </form>
                    </td>
                </tr>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="d-flex align-items-center justify-content-center gap-4 p-1">
                        <a href="" class="btn buttonEdit " data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                class="bi bi-pencil-square"></i></a>
                        <form action="" id="DeleteUser">
                            <button type="button" class="buttonDelete btn pl-2 pr-2"><i
                                    class="bi bi-trash3-fill"></i></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="d-flex align-items-center justify-content-center gap-4 p-1">
                        <a href="" class="btn buttonEdit " data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                class="bi bi-pencil-square"></i></a>
                        <form action="" id="DeleteUser">
                            <button type="button" class="buttonDelete btn pl-2 pr-2"><i
                                    class="bi bi-trash3-fill"></i></button>
                        </form>
                    </td>
                </tr>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="d-flex align-items-center justify-content-center gap-4 p-1">
                        <a href="" class="btn buttonEdit " data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                class="bi bi-pencil-square"></i></a>
                        <form action="" id="DeleteUser">
                            <button type="button" class="buttonDelete btn pl-2 pr-2"><i
                                    class="bi bi-trash3-fill"></i></button>
                        </form>
                    </td>
                </tr>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="d-flex align-items-center justify-content-center gap-4 p-1">
                        <a href="" class="btn buttonEdit " data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"><i class="bi bi-pencil-square"></i></a>
                        <form action="" id="DeleteUser">
                            <button type="button" class="buttonDelete btn pl-2 pr-2"><i
                                    class="bi bi-trash3-fill"></i></button>
                        </form>
                    </td>
                </tr>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="d-flex align-items-center justify-content-center gap-4 p-1">
                        <a href="" class="btn buttonEdit " data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"><i class="bi bi-pencil-square"></i></a>
                        <form action="" id="DeleteUser">
                            <button type="button" class="buttonDelete btn pl-2 pr-2"><i
                                    class="bi bi-trash3-fill"></i></button>
                        </form>
                    </td>
                </tr>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="d-flex align-items-center justify-content-center gap-4 p-1">
                        <a href="" class="btn buttonEdit " data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"><i class="bi bi-pencil-square"></i></a>
                        <form action="" id="DeleteUser">
                            <button type="button" class="buttonDelete btn pl-2 pr-2"><i
                                    class="bi bi-trash3-fill"></i></button>
                        </form>
                    </td>
                </tr>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="d-flex align-items-center justify-content-center gap-4 p-1">
                        <a href="" class="btn buttonEdit " data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"><i class="bi bi-pencil-square"></i></a>
                        <form action="" id="DeleteUser">
                            <button type="button" class="buttonDelete btn pl-2 pr-2"><i
                                    class="bi bi-trash3-fill"></i></button>
                        </form>
                    </td>
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
