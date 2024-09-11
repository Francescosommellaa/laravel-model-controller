{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')
    <div>HERO HOME</div>
@endsection

@section('content')
    <div class="container my-5">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">{{ $movie->nationality }}</p>
                            <p class="card-text"><small class="text-muted">Vote: {{ $movie->vote }}</small></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


@section('titlePage')
    home
@endsection
