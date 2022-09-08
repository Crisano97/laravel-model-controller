@extends('layout.main')

@section('main-content')
    @forelse ($movies as $movie)
        <div class="card">
            <h1>{{ $movie->title }}</h1>
            <h2>{{ $movie->original_title }}</h2>
            <span>{{ $movie->nationality }}</span>
            <span>{{ $movie->date }}</span>
            <span>{{ $movie->vote }}</span>
        </div>
        
    @empty
        <p>no movies foud</p>
    @endforelse
    
@endsection