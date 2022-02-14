@extends('course.layout')

@section('content')

    <div class="pagetitle">
        <h1>Meus Cursos</h1>
    </div>

    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">Minha Lista</h5>

                        <div class="col-2">
                            <div class="card">
                                <img src="{{ asset('course/assets/img/card.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card with an image on top</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a class="btn btn-primary" href="#">Ir ao curso</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
