@extends('course.layout')

@section('content')

    <div class="pagetitle">
        <h1>Meus Cursos</h1>
    </div>

    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
                <div class="card recent-sales">
                    <div class="row card-body">
                        <h5 class="card-title">Minha Lista</h5>

                            @foreach($customerCourses as $item)
                                <div class="col-3">
                                    <div class="card">
                                        <img src="{{ $item->course->image_url }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ \Illuminate\Support\Str::limit($item->course->name, 10) }}</h5>
                                            <p class="card-text">{{ \Illuminate\Support\Str::limit($item->course->description, 50) }}</p>
                                            <a class="btn btn-primary" href="{{ url("/curso/{$item->course->slug}") }}">Ir ao curso</a>
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
