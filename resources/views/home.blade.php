@extends('layout.main')

@section('main-content')
    <div class="container my-4">
        <div class="row justify-content-between">
        @forelse ($movies as $movie)
                <div class="card col-2 mx-3 my-4 border border-5">
                    <h1>{{ $movie->title }}</h1>
                    <h2>{{ $movie->original_title }}</h2>
                    <span>{{ $movie->nationality }}</span>
                    <span>{{ $movie->date }}</span>
                    <span>{{ $movie->vote }}</span>
                </div>
                
                @empty
                <p>no movies foud</p>
                @endforelse
                
            </div>
    </div>
@endsection