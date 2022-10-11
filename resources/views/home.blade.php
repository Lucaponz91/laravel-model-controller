@extends('layouts.app')
@section('metaTitle', 'Home Page')

@section('content')
<h1>Movies</h1>
<div class="movies_container">
    @foreach ($movies as $movie)
        
    
    <div class="card_movie">
        <h2>{{$movie['title']}}</h2>
        <h3>Titolo Originale: {{$movie['original_title']}} </h3>
        <h4>Nazionalità: {{$movie['nationality']}} </h4>
        <h4>Data di uscita: {{$movie['date']}} </h4>
        <h4>Voto: {{$movie['vote']}} </h4>

    </div>
    
@endforeach
</div>

@endsection