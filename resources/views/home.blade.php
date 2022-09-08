@extends('layout.main')

@section('main-content')
@dump('movies')
    @forelse ($movies as $movie)
        <h1>{{ $movie->title }}</h1>
        
    @empty
        <p>no movies foud</p>
    @endforelse
@endsection