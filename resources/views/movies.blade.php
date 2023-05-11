@extends('layouts.app')

{{-- head --}}
@section('page-title', 'laravel-model-controller')

{{-- header --}}
@section('page-subtitle', 'Movies')

{{-- main --}}
@section('content')
    <main class="py-5">

        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4 row-cols-lg-3 row-cols-xl-4">
                @foreach ($movies as $movie)
                    <div class="col">
                        <div class="card h-100 text-bg-dark">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">
                                    {{ $movie['title'] }}
                                </h5>
                                <h6 class="card-title">
                                    <em>{{$movie['original_title']}}</em>
                                </h6>
                                <ul class="list-group list-group-flush text-start">
                                    <li class="list-group-item text-bg-dark">
                                        Nazionalità : {{$movie['nationality']}}
                                    </li>
                                    <li class="list-group-item text-bg-dark">
                                        Data : {{$movie['date']}}
                                    </li>
                                    <li class="list-group-item text-bg-dark">
                                        Voto : {{$movie['vote']}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </main>
@endsection
