@extends('layout.adminLayout')
@section('title')
@section('css')
    <style>
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

        .buttonShow {
            background: #E1F0FF;
            color: #3699FF;
        }

        .buttonShow:hover {
            background: #3699FF;
            color: #E1F0FF;
        }
    </style>
@endsection
@section('content')
    <div class="">
        <h3>👋 Usuarios</h3>
    </div>
    <div class="">
        <p class="">Empiece a explorar la interfaz como un super admin</p>
    </div>
    <section class="container-info d-flex flex-column">
        <h2 class="mb-5">Bienvenido a la seccion de Usuarios</h2>
        <table class=" table  table-hover">
            <thead class="table-info">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRES</th>
                    <th scope="col">TELEFONO</th>
                    <th scope="col">CORREO</th>
                    <th scope="col" class="text-center">ESTADO</th>
                    <th scope="col" class="text-center">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-transaparent">
                    <th scope="row" class="bg-transparent">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="text-center"><span style="background:#C9F7F5; color:#1BC5BD; padding: 4px 25px;" class="rounded"> activo </span></td>
                    <td class="d-flex align-items-center justify-content-center gap-4 p-1">
                        <a href="" class="btn buttonEdit " data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                class="bi bi-pencil-square"></i></a>
                        <form action="" id="DeleteUser">
                            <button type="button" class="buttonDelete btn pl-2 pr-2"><i
                                    class="bi bi-trash3-fill"></i></button>
                        </form>
                        <a href="" class="btn buttonShow" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                class="bi bi-tencent-qq"></i></a>
                    </td>
                </tr>
                <tr class="bg-transparent">
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="text-center"><span style="background:#FFE2E5; color:#F64E60; padding: 4px 25px;" class="rounded"> Inactivo </span></td>
                    <td class="d-flex align-items-center justify-content-center gap-4 p-1">
                        <a href="" class="btn buttonEdit " data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                class="bi bi-pencil-square"></i></a>
                        <form action="" id="DeleteUser">
                            <button type="button" class="buttonDelete btn pl-2 pr-2"><i
                                    class="bi bi-trash3-fill"></i></button>
                        </form>
                        <a href="" class="btn buttonShow"><i class="bi bi-tencent-qq"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="text-center"><span style="background:#C9F7F5; color:#1BC5BD; padding: 4px 25px;" class="rounded"> activo </span></td>
                    <td class="d-flex align-items-center justify-content-center gap-4 p-1">
                        <a href="" class="btn buttonEdit " data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                class="bi bi-pencil-square"></i></a>
                        <form action="" id="DeleteUser">
                            <button type="button" class="buttonDelete btn pl-2 pr-2"><i
                                    class="bi bi-trash3-fill"></i></button>
                        </form>
                        <a href="" class="btn buttonShow"><i class="bi bi-tencent-qq"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="text-center"><span style="background:#FFE2E5; color:#F64E60; padding: 4px 25px;" class="rounded"> Inactivo </span></td>
                    <td class="d-flex align-items-center justify-content-center gap-4 p-1">
                        <a href="" class="btn buttonEdit " data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                class="bi bi-pencil-square"></i></a>
                        <form action="" id="DeleteUser">
                            <button type="button" class="buttonDelete btn pl-2 pr-2"><i
                                    class="bi bi-trash3-fill"></i></button>
                        </form>
                        <a href="" class="btn buttonShow"><i class="bi bi-tencent-qq"></i></a>
                    </td>
                </tr>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="text-center"><span style="background:#FFE2E5; color:#F64E60; padding: 4px 25px;" class="rounded"> Inactivo </span></td>
                    <td class="d-flex align-items-center justify-content-center gap-4 p-1">
                        <a href="" class="btn buttonEdit " data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                class="bi bi-pencil-square"></i></a>
                        <form action="" id="DeleteUser">
                            <button type="button" class="buttonDelete btn pl-2 pr-2"><i
                                    class="bi bi-trash3-fill"></i></button>
                        </form>
                        <a href="" class="btn buttonShow"><i class="bi bi-tencent-qq"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="text-center"><span style="background:#FFE2E5; color:#F64E60; padding: 4px 25px;" class="rounded"> Inactivo </span></td>
                    <td class="d-flex align-items-center justify-content-center gap-4 p-1">
                        <a href="" class="btn buttonEdit " data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                class="bi bi-pencil-square"></i></a>
                        <form action="" id="DeleteUser">
                            <button type="button" class="buttonDelete btn pl-2 pr-2"><i
                                    class="bi bi-trash3-fill"></i></button>
                        </form>
                        <a href="" class="btn buttonShow"><i class="bi bi-tencent-qq"></i></a>
                    </td>
                </tr>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="text-center"><span style="background:#FFE2E5; color:#F64E60; padding: 4px 25px;" class="rounded"> Inactivo </span></td>
                    <td class="d-flex align-items-center justify-content-center gap-4 p-1">
                        <a href="" class="btn buttonEdit " data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"><i class="bi bi-pencil-square"></i></a>
                        <form action="" id="DeleteUser">
                            <button type="button" class="buttonDelete btn pl-2 pr-2"><i
                                    class="bi bi-trash3-fill"></i></button>
                        </form>
                        <a href="" class="btn buttonShow"><i class="bi bi-tencent-qq"></i></a>
                    </td>
                </tr>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="text-center"><span style="background:#FFE2E5; color:#F64E60; padding: 4px 25px;" class="rounded"> Inactivo </span></td>
                    <td class="d-flex align-items-center justify-content-center gap-4 p-1">
                        <a href="" class="btn buttonEdit " data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"><i class="bi bi-pencil-square"></i></a>
                        <form action="" id="DeleteUser">
                            <button type="button" class="buttonDelete btn pl-2 pr-2"><i
                                    class="bi bi-trash3-fill"></i></button>
                        </form>
                        <a href="" class="btn buttonShow"><i class="bi bi-tencent-qq"></i></a>
                    </td>
                </tr>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="text-center"><span style="background:#FFE2E5; color:#F64E60; padding: 4px 25px;" class="rounded"> Inactivo </span></td>
                    <td class="d-flex align-items-center justify-content-center gap-4 p-1">
                        <a href="" class="btn buttonEdit " data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"><i class="bi bi-pencil-square"></i></a>
                        <form action="" id="DeleteUser">
                            <button type="button" class="buttonDelete btn pl-2 pr-2"><i
                                    class="bi bi-trash3-fill"></i></button>
                        </form>
                        <a href="" class="btn buttonShow"><i class="bi bi-tencent-qq"></i></a>
                    </td>
                </tr>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="text-center"><span style="background:#FFE2E5; color:#F64E60; padding: 4px 25px;" class="rounded"> Inactivo </span></td>
                    <td class="d-flex align-items-center justify-content-center gap-4 p-1">
                        <a href="" class="btn buttonEdit " data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"><i class="bi bi-pencil-square"></i></a>
                        <form action="" id="DeleteUser">
                            <button type="button" class="buttonDelete btn pl-2 pr-2"><i
                                    class="bi bi-trash3-fill"></i></button>
                        </form>
                        <a href="" class="btn buttonShow"><i class="bi bi-tencent-qq"></i></a>
                    </td>
                </tr>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="text-center"><span style="background:#FFE2E5; color:#F64E60; padding: 4px 25px;" class="rounded"> Inactivo </span></td>
                    <td class="d-flex align-items-center justify-content-center gap-4 p-1">
                        <a href="" class="btn buttonEdit " data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"><i class="bi bi-pencil-square"></i></a>
                        <form action="" id="DeleteUser">
                            <button type="button" class="buttonDelete btn pl-2 pr-2"><i
                                    class="bi bi-trash3-fill"></i></button>
                        </form>
                        <a href="" class="btn buttonShow"><i class="bi bi-tencent-qq"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Actualizar Usuario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="GET" id="">
                        <div class="mb-3">
                            <label for="emailUser" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="emailUser" value="Super Admin">
                        </div>
                        <div class="mb-3">
                            <label for="phoneUser" class="form-label">Telefono</label>
                            <input type="text" class="form-control" id="phoneUser" value="999888777">
                        </div>
                        <div class="mb-3">
                            <label for="emailUser" class="form-label">Correo Electronico</label>
                            <input type="email" class="form-control" id="emailUser" aria-describedby="emailHelp"
                                value="SuperAdmin@gmail.com">
                            <div id="emailHelp" class="form-text text-danger">El correo es importante para ingresar al
                                sistema</div>
                        </div>
                        <div class="d-flex align-items-center justify-content-evenly">
                            <button type="submit" class="btn updateUser" id="updateUser">Actualizar Usuario</button>
                            <button type="button" class="btn cancelUser" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer m-auto border-none">
                    <span class="form-text text-center">graph evolution prime</span>
                </div>
            </div>
        </div>
    </div>
    {{-- modal user info --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content p-4">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 class="title text-center">Informacion del usuario</h4>
                    <div class="d-flex justify-content-center ">
                        <img src="{{ asset('img/admin/superadmin.jpg')}}" alt="" width="100%" class="rounded pb-4">
                    </div>
                    <p class="fs-6 p-2 rounded" style="background: #E1F0FF ; color: #3699FF ;"><span class="fw-bold">ID: </span> 2</p>
                    <P class="fs-6 p-2 rounded" style="background: #E1F0FF ; color: #3699FF ;"><span class="fw-bold">Nombres: </span> Super Admin</P>
                    <p class="fs-6 p-2 rounded" style="background: #E1F0FF ; color: #3699FF ;"><span class="fw-bold">Telefono: </span> 999888777</p>
                    <p class="fs-6 p-2 rounded" style="background: #E1F0FF ; color: #3699FF ;"><span class="fw-bold">Correo: </span> SuperAdmin@gmail.com</p>
                    <p class="fs-6 p-2 rounded" style="background: #E1F0FF ; color: #3699FF ;"><span class="fw-bold">Estado: </span> Activo</p>
                </div>
                <div class="m-auto">
                    <p class="form-text text-center">Grahp Evolution 2023</p>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-info p-5 d-flex justify-content-center align-items-center">
        <p class="m-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum atque, ab quisquam assumenda
            nobis quasi id
            ducimus debitis, pariatur sunt hic dolor suscipit cum culpa iste voluptatem rerum aliquid quidem?</p>
        <div class="d-flex font-size-sm flex-wrap">
            <button type="button" class="btn btn-primary font-weight-bolder" onclick="window.print();"><i
                    class="bi bi-printer fs-1"></i></button>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var deleteUser = document.getElementById('DeleteUser');
        deleteUser.addEventListener('click', function(event) {
            event.preventDefault();
            Swal.fire({
                title: 'Alerta!',
                text: "Estas seguro que desea eliminar el usuario Admin!",
                icon: 'warning',
                iconColor: '#F64E60',
                showCancelButton: true,
                confirmButtonColor: '#8950FC',
                cancelButtonColor: '#F64E60',
                confirmButtonText: 'Si, eliminar!',
                denyButtonColor: '#282828'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                            title: 'Eliminado!',
                            text: 'El usuario a sido eliminado correctamente',
                            textColor: '#1BC5BD',
                            icon: 'success',
                            iconColor: '#1BC5BD ',
                            confirmButtonText: 'Aceptar',
                            confirmButtonColor: '#1BC5BD '

                        }

                    )
                }
            })
        })
        var actualizarUsuario = document.getElementById('updateUser');
        actualizarUsuario.addEventListener('submit', function(event) {
            event.preventDefault();
            Swal.fire({
                title: 'Eliminado!',
                text: 'El usuario a sido eliminado correctamente',
                textColor: '#1BC5BD',
                icon: 'success',
                iconColor: '#1BC5BD ',
                confirmButtonText: 'Aceptar',
                confirmButtonColor: '#1BC5BD '
            })
        })
    </script>
@endsection
