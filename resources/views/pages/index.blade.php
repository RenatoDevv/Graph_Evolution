@extends('layout.layout')
@section('title', 'index')
@section('css')
    <style>
        section {
            width: 55%;
            margin-top: 170px;
            margin-bottom: 50px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        section h2 {
            font-size: 80px;
        }

        section .start {
            border-radius: 20px;
            background: #ff17ec;
            color: black;
            text-decoration: none;
            padding: 10px 70px;
        }
        section .start:hover {
            background: #ec51df;
        }
    </style>
@endsection
@section('content')
    <section class="">
        <h2>Lorem ipsum dolor sit amet. sit</h2>
        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, exercitationem, quidem modi.
            Mollitia, exercitationem, quidem modi.</p>
        <a href="" class="start">Start</a>
    </section>
    <section>
        <h2>Seccion 2</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A nisi sapiente autem natus amet commodi laboriosam fuga
            facere, ex doloribus voluptate neque quis architecto. Corrupti molestiae dolorum blanditiis eum fugiat.</p>
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button>
        <a href="/blade1">Blade 1</a>
        <a href="/blade2">Blade 2</a>
        <a href=""></a>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection