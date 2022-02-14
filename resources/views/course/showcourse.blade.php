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
                        <h1>PHP - Do Zero ao Profissional!</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a vehicula mi, a posuere nunc. Maecenas semper at erat aliquam convallis. Nunc consectetur rhoncus ligula nec imperdiet. Quisque convallis turpis eget metus imperdiet, et dignissim eros cursus. Nam nec ultricies ipsum. Aliquam nec lorem a nisl egestas pellentesque. In consectetur nibh in ligula consequat elementum.</p>

                            <h5 class="card-title">Aulas</h5>

                            <!-- List group With Checkboxes and radios -->
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    <a href="#">First checkbox</a>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    <a href="#">First checkbox</a>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    <a href="#">First checkbox</a>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    <a href="#">First checkbox</a>
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    <a href="#">First checkbox</a>
                                </li>
                            </ul><!-- End List Checkboxes and radios -->


                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
