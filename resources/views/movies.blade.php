@extends('layouts.app')

@section('title','movies')

@section('content') 
    
    <div class="container">
        <h1>I NOSTRI MOVIES:</h1>
        <div class="list-movies">

            @foreach ($movies as $movie)
            {{-- fa riferimento alla pagina dettaglio con id = index --}}
                <a class="card-movie" href="{{route('pagina-movie', $movie['id'])}}">
                    <div class="titleMovie">Titolo: {{$movie['title']}}</div>
                    <div class="nationalityMovie">Nazionalità: {{$movie['nationality']}}</div>
                    <div class="dateMovie">Data di uscita: {{$movie['date']}}</div>
                    <div class="ratingMovie">Voto: {{$movie['vote']}}</div>
                </a>
            @endforeach

        </div>
    </div>
@endsection