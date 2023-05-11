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
                            <div class="card-body text-center">
                                <h3 class="card-title mb-3">
                                    {{ $movie['title'] }}
                                    </h5>
                                    <h6 class="card-title">
                                        <em>{{ $movie['original_title'] }}</em>
                                    </h6>
                            </div>
                            <ul class="list-group list-group-flush text-start">
                                <li class="list-group-item text-bg-secondary">
                                    Nazionalità :
                                    @switch($movie['nationality'])
                                        @case('US')
                                            <img src="https://flagsapi.com/US/flat/32.png" alt="Americana">
                                            @break
                                        @case('US/GB')
                                            <img src="https://flagsapi.com/US/flat/32.png" alt="Americana">
                                            /
                                            <img src="https://flagsapi.com/GB/flat/32.png" alt="Inglese">
                                            @break
                                        @default
                                            unknown
                                    @endswitch
                                </li>
                                <li class="list-group-item text-bg-secondary">
                                    Data : {{ $movie['date'] }}
                                </li>
                                <li class="list-group-item text-bg-secondary">
                                    Voto : {{ $movie['vote'] }}
                                </li>
                            </ul>
                            <div class="card-footer">
                                <div class="text-end">
                                    Scheda n.{{$movie['id']}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </main>
@endsection
