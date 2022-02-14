@extends('course.layout')

@section('content')

    <div class="pagetitle">
        <h1>Dashboard</h1>
    </div>

    <section class="section dashboard">
        <div class="row flex-wrap">
            <div class="col-12">
                <div class="card recent-sales">
                    <div class="row flex-wrap card-body">
                        <h5 class="card-title">Cursos Disponíveis!</h5>
                        @foreach($courses as $course)
                        <div class="col-3">
                            <div class="card">
                                <img src="{{ $course->image_url }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ \Illuminate\Support\Str::limit($course->name, 10) }}</h5>
                                    <p class="card-text">{{ \Illuminate\Support\Str::limit($course->description, 50) }}</p>
                                    <a class="btn btn-primary" href="{{ url("/curso/{$course->slug}") }}">Ir ao curso</a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>
            </div>
            <div class="col-12">
                <div class="card recent-sales">
                    <div class="row flex-wrap card-body">
                        <h5 class="card-title">Cursos Grátis!</h5>

                        @foreach($coursesFree as $course)
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ $course->image_url }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ \Illuminate\Support\Str::limit($course->name, 10) }}</h5>
                                        <p class="card-text">{{ \Illuminate\Support\Str::limit($course->description, 50) }}</p>
                                        <a class="btn btn-primary" href="{{ url("/curso/{$course->slug}") }}">Ir ao curso</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
            <div class="col-12">
                <div class="card recent-sales">
                    <div class="row flex-wrap card-body">
                        <h5 class="card-title">Cursos Pagos!</h5>

                        @foreach($coursesPaid as $course)
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ $course->image_url }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ \Illuminate\Support\Str::limit($course->name, 10) }}</h5>
                                        <p class="card-text">{{ \Illuminate\Support\Str::limit($course->description, 50) }}</p>
                                        <a class="btn btn-primary" href="{{ url("/curso/{$course->slug}") }}">Ir ao curso</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
