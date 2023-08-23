@extends('layouts.main')

@section('title', 'Home')

@section('main')
    <h1>Ecco tutti i film!</h1>
    {{ $movies  }}
    @foreach ($movies as $movie)
    <p> {{ $movie->title }}</p>
        
    @endforeach
@endsection
