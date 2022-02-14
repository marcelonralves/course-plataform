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
                        <h5 class="card-title">Programação</h5>
                        <h1>{{ $course->name }}</h1>
                        <p>{{ $course->description }}</p>

                        <h5 class="card-title">Aulas</h5>
                        @if($customer)
                            <ul class="list-group">
                                @foreach($course->lesson as $lesson)
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                        <a href="{{ url("/curso/{$course->slug}/{$lesson->slug}") }}">{{ $lesson->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            Parece que você não está cadastrado nesse curso!
                            <p>Caso queira ter acesso as aulas basta clicar no botão abaixo!</p>
                            <a href="{{ url("/inscrever/{$course->id}") }}" class="btn btn-primary">Inscrever!</a>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
