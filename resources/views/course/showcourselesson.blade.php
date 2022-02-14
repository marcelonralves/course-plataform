@extends('course.layout')

@section('content')

    <div class="pagetitle">
        <h1>Curso</h1>
    </div>

    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">PHP - Do Zero ao Profissional!</h5>
                        <h1>01 - Primeiros Passos</h1>
                        <p>Professor: Sr. Miau</p>
                        <video width="720" height="500" controls>
                            <source src="{{ asset('course/movie.mp4') }}" type="video/mp4">
                        </video>

                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
