@extends('course.layout')

@section('content')

    <div class="pagetitle">
        <h1>Curso - {{ ($courselesson->course->name) }}</h1>
    </div>

    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <h1>{{ ($courselesson->title) }}</h1>
                        <p>Professor: {{ $courselesson->author_id }}</p>
                        <video width="720" height="500" controls>
                            <source src="{{ $courselesson->video_url }}" type="video/mp4">
                        </video>

                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
